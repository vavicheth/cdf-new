<?php

namespace App\Http\Controllers\Admin;

use App\Exports\DocumentExport;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyDocumentRequest;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Mail\DocumentMail;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Document;
use App\Models\DocumentType;
use App\Models\Organisation;
use App\Models\User;
use App\Traits\UsableTrait;
use ChankatiFormulaTrait;
use Crlt_\LunarCalendar\LunarCalendar;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Mpdf\Mpdf;
use niklasravnsborg\LaravelPdf\Facades\Pdf;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class DocumentController extends Controller
{
    use MediaUploadingTrait;
    use UsableTrait;

    public function index(Request $request)
    {

        abort_if(Gate::denies('document_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            if (auth()->user()->can('comment_grand_access') || auth()->user()->can('comment_status_view')) {
                $query = Document::with(['category','organisation', 'users', 'document_type'])
                    ->when(request('close') == 1, function ($q) {
                        return $q->where('submit','=',1);
                    })
                    ->when(request('active') == 1, function ($q) {
                        return $q->where('submit','=',0);
                    })
                    ->select(sprintf('%s.*', (new Document)->table));
            }else{
                $query = Document::with(['category','organisation','documentComments', 'users','document_type'])
                    ->whereHas('users',function($q){
                        $q->where('id', auth()->id());
                    });

                if (request('close')==1) {
                    $query =$query->where('submit',1);
                }elseif(request('active')==1){
                    $query =$query->where('submit',0);
                }

                $query =$query ->select(sprintf('%s.*', (new Document)->table));
            }


            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'document_show';
                $editGate      = 'document_edit';
                $deleteGate    = 'document_delete';
                $crudRoutePart = 'documents';

                return view('partials.datatablesActionsDocument', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('letter_code', function ($row) {
                return $row->letter_code ? $row->letter_code : "";
            });
            $table->editColumn('code_in', function ($row) {
                return $row->code_in ? $row->code_in : "";
            });
            $table->editColumn('code_out', function ($row) {
                return $row->code_out ? $row->code_out : "";
            });
            $table->editColumn('document_code', function ($row) {
                return $row->document_code ? $row->document_code : "";
            });
            $table->addColumn('category_name', function ($row) {
                return $row->category ? $row->category->name : '';
            });

            $table->addColumn('organisation_name', function ($row) {
                return $row->organisation ? $row->organisation->name : '';
            });
            $table->editColumn('from_organisation', function ($row) {
                return $row->from_organisation ? Str::limit($row->from_organisation,25) : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? Str::limit($row->description,25) : '';
            });

            $table->setRowClass(function ($row) {
                if (!request('close')==1 && $row->documentComments()->where('user_id',auth()->id())->count() > 0 ) {
                    return 'bg-light-info';
                }elseif(!request('close')==1 && $row->isDatelineOver(24) ) {
                    return 'bg-light-warning';
                }elseif (!request('close')==1 && $row->submit ){
                    return 'bg-light-success';
                }
            });

            $table->editColumn('user', function ($row) {
                $labels = [];

                foreach ($row->users as $user) {
                    $labels[] = sprintf('<span class="badge badge-info">%s</span>', $user->name);
                }

                return implode(' ', $labels);
            });
            $table->editColumn('document_file', function ($row) {
                if (!$row->document_file) {
                    return '';
                }

                $links = [];

                foreach ($row->document_file as $media) {
                    $links[] = '<a href="' . $media->getUrl() . '" target="_blank">' . $media->name.  ' (' .$media->size . 'KB)' . '</a>';
                }

                return implode(', <br>', $links);
            });
            $table->addColumn('document_type_name', function ($row) {
                return $row->document_type ? $row->document_type->name : '';
            });

            $table->editColumn('complete', function ($row) {
                if ($row->complete) {
                    return '<span class="badge badge-success">Completed</span>';
                }else{
                    return '<span class="badge badge-primary">Processing</span>';
                }
            });
            $table->editColumn('submit', function ($row) {
                if ($row->submit) {
                    return '<span class="badge badge-danger">Closed</span>';
                }else{
                    return '<span class="badge badge-success">Active</span>';
                }
            });

            $table->rawColumns(['actions', 'placeholder', 'category', 'organisation', 'user', 'document_file', 'document_type', 'complete', 'submit','description','from_organisation']);

            return $table->make(true);
        }

        $categories     = Category::get();
        $organisations  = Organisation::get();
        $users          = User::get();
        $document_types = DocumentType::get();

        return view('admin.documents.index', compact('categories', 'organisations', 'users', 'document_types'));
    }

    public function create()
    {
        abort_if(Gate::denies('document_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $organisations = Organisation::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::all()->pluck('name', 'id');

        $document_types = DocumentType::all()->pluck('name', 'id');

        return view('admin.documents.create', compact('categories', 'organisations', 'users', 'document_types'));
    }

    public function store(StoreDocumentRequest $request)
    {
//        dd($request->all());
        abort_if(Gate::denies('document_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!request('document_type_id')) {
            $request->merge(["document_type_id"=>1]);
        }
        if (!request('organisation_id')) {
            $request->merge(["organisation_id"=>1]);
        }

        $document = Document::create($request->all());
//        $document->update(['code_in'=>$this->CodeIn($document->id)]);

        $users=collect(array_flip($request->input('users', [])))
            ->map(function ($user){
                return ['ordering'=>$user];
            });
        $document->users()->sync($users);

        foreach ($request->input('document_file', []) as $file) {
            $document->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('document_file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $document->id]);
        }

        $this->sendMail($document,$request->users);

        return redirect()->route('admin.documents.index');
    }

    public function edit(Document $document)
    {
        abort_if(Gate::denies('document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if ($document->isEditOver() && !auth()->user()->can('document_grand_access')) {
            abort(Response::HTTP_FORBIDDEN, '403 Forbidden');
        }

        $categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $organisations = Organisation::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::all()->pluck('name', 'id');
        $users_doc=$document->users()
            ->with(array('comments' => function($query) use ($document)
            {
                $query->where('document_id', $document->id);
            }))
            ->orderBy('ordering', 'asc')->get();

        $document_types = DocumentType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $document->load('category', 'organisation', 'users', 'document_type');

        return view('admin.documents.edit', compact('categories', 'organisations', 'users', 'document_types', 'document', 'users_doc'));
    }

    public function update(UpdateDocumentRequest $request, Document $document)
    {
        abort_if(Gate::denies('document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $old_users=$document->users->pluck('id')->toArray();
        $new_users=$request->users;
        $get_users=array_diff($new_users,$old_users);

        if ($document->isEditOver() && !auth()->user()->can('document_grand_access')) {
            abort(Response::HTTP_FORBIDDEN, '403 Forbidden');
        }

        $document->update($request->all());
        $users=collect(array_flip($request->input('users', [])))
            ->map(function ($user){
                return ['ordering'=>$user];
            });
        $document->users()->sync($users);

        //delete comment that has edit user not in new list
        $del_comments=$document->documentComments()->whereNotIn('user_id',$request->users)->delete();

        if (count($document->document_file) > 0) {
            foreach ($document->document_file as $media) {
                if (!in_array($media->file_name, $request->input('document_file', []))) {
                    $media->delete();
                }
            }
        }

        $media = $document->document_file->pluck('file_name')->toArray();

        foreach ($request->input('document_file', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $document->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('document_file');
            }
        }

        $this->sendMail($document,$get_users);

        return redirect()->route('admin.documents.index');
    }

    public function show(Document $document)
    {
        abort_if(Gate::denies('document_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $document->load('category','organisation', 'users', 'document_type', 'documentComments');
        $users=$document->users()
            ->with(array('comments' => function($query) use ($document)
            {
                $query->where('document_id', $document->id);
            }))
            ->orderBy('ordering', 'asc')->get();
        return view('admin.documents.show', compact('document','users'));
    }

    public function destroy(Document $document)
    {
        abort_if(Gate::denies('document_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if ($document->isEditOver() && !auth()->user()->can('document_grand_access')) {
            abort(Response::HTTP_FORBIDDEN, '403 Forbidden');
        }

        $document->delete();

        return back();
    }

    public function massDestroy(MassDestroyDocumentRequest $request)
    {
        Document::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('document_create') && Gate::denies('document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Document();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

    public function print($id)
    {
        abort_if(Gate::denies('document_print_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $document=Document::findOrFail($id);
        $document->load('category','organisation', 'users', 'document_type', 'documentComments');
        $users=$document->users()
            ->with(array('comments' => function($query) use ($document)
            {
                $query->where('document_id', $document->id);
            }))
            ->orderBy('ordering', 'asc')->get();

        $pdf=Pdf::loadView('admin.documents.includes.print', ['document'=>$document,'users'=>$users]);
        return $pdf->stream('document.pdf');


////
//        $pdf = App::make('dompdf.wrapper');
////        $pdf->loadHTML('<h1>Test</h1>');
//        $pdf->loadView('admin.documents.includes.print', ['document'=>$document,'users'=>$users]);
//        return $pdf->stream();


//        $pdf=Pdf::loadView('admin.documents.includes.print', ['document'=>$document,'users'=>$users]);
//        $stylesheet = file_get_contents(base_path().'/public/css/app.css');
//        return $pdf->stream('document.pdf');


//        $path = Storage::disk('local')->path("_letters(".$letterCount."-letters).pdf");

//        $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
//        $fontDirs = $defaultConfig['fontDir'];
//
//        $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
//        $fontData = $defaultFontConfig['fontdata'];


//        $view = View::make(
//            'admin.documents.includes.print',
//            ['document'=>$document,'users'=>$users],
//        );
//        $html = $view->render();
//        $mpdf = new Mpdf(['mode' => 'UTF-8', 'format' => 'A4-P', 'autoScriptToLang' => true, 'autoLangToFont' => true,
//            'fontDir' => base_path('resources/fonts/'),
//            'fontdata' => [
//                "khmerosmoul" => [/* Khmer */
//                    'R' => "KhmerOSmuol.ttf",
//                    'useOTL' => 0xFF,
//                ],
//                "khmerosmoullight" => [/* Khmer */
//                    'R' => "KhmerOSmuollight.ttf",
//                    'useOTL' => 0xFF,
//                ],
//                "khmerosbattambang" => [/* Khmer */
//                    'R' => "KhmerOSbattambang.ttf",
//                    'useOTL' => 0xFF,
//                ],
//            ],
////            'default_font' => 'khmerosbattambang'
//            ]);
//        $mpdf->WriteHTML($html);
//        $mpdf->Output();



//        $export = new DocumentExport($document,$users);
//        return Excel::download($export, $document->code_in.'.pdf', \Maatwebsite\Excel\Excel::MPDF);
//
        return view('admin.documents.includes.print_html',compact('document','users'));
    }

    public function sendMail(Document $document,$users=[])
    {
        $emails=User::whereIn('id',$users)->pluck('email')->toArray();
            $details=[
                'subject'=>'យោបល់លើឯកសារ លេខៈ '. $document->code_in ,
                'title'=>'លោកអ្នកត្រូវមានយោបល់លើឯកសារលេខៈ <b>' . $document->code_in . '</b>។ សូមលោកអ្នកចុចលើតំណរភ្ជាប់ខាងក្រោម ដើម្បីមានយោបល់៖',
                'body'=>'<a class="btn btn-primary" href="'. route('admin.documents.show',$document->id) .'"><i class="fa fa-hand-point-right"></i> ឯកសារលេខ '. $document->code_in . '</a>',
            ];

            foreach ($emails as $email)
            {
                Mail::to($email)->send(new DocumentMail($details));
            }
    }


    public function view_pdf(Request $request)
    {
        abort_if(Gate::denies('annotation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $media=Media::findOrFail($request->media_id);
        $document=Document::findOrFail($request->document_id);

        return view('admin.documents.annotations.index',compact('media','document'));
    }

    public function save_pdf(Request $request)
    {
        abort_if(Gate::denies('annotation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $file=$request->file('pdf');
        $filename='updated_'.$file->getClientOriginalName();
        $file->move(storage_path('tmp/uploads/'),$filename);

        $pdf = new \mikehaertl\pdftk\Pdf(storage_path('tmp/uploads/'.$filename));
        $pdf->compress('uncompress');
        $pdf->compress('compress');

        $document=Document::findOrFail($request->document_id);
        $document->addMedia(storage_path('tmp/uploads/' . $filename))->toMediaCollection('document_file');

        $cm=$document->documentComments()->where('user_id',auth()->id())->count();
        if ($cm < 1) {
            $comment = Comment::create(['document_id'=>$request->document_id,'user_id'=>auth()->id(),'comment'=>'យោបល់លើឯកសារ']);
        }

        return 'File has been saved!';

    }


}
