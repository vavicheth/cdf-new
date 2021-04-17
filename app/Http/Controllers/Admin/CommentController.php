<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCommentRequest;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use App\Models\Document;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CommentController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('comment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Comment::with(['document', 'user'])->select(sprintf('%s.*', (new Comment)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'comment_show';
                $editGate      = 'comment_edit';
                $deleteGate    = 'comment_delete';
                $crudRoutePart = 'comments';

                return view('partials.datatablesActions', compact(
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
            $table->editColumn('submit', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->submit ? 'checked' : null) . '>';
            });
            $table->addColumn('document_document_code', function ($row) {
                return $row->document ? $row->document->document_code : '';
            });

            $table->addColumn('user_name', function ($row) {
                return $row->user ? $row->user->name : '';
            });

            $table->editColumn('is_esign', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->is_esign ? 'checked' : null) . '>';
            });

            $table->rawColumns(['actions', 'placeholder', 'submit', 'document', 'user', 'is_esign']);

            return $table->make(true);
        }

        $documents = Document::get();
        $users     = User::get();

        return view('admin.comments.index', compact('documents', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('comment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $documents = Document::all()->pluck('document_code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.comments.create', compact('documents', 'users'));
    }

    public function store(StoreCommentRequest $request)
    {
        abort_if(Gate::denies('comment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $doc=Document::findOrFail($request->document_id);
        $cm=$doc->documentComments()->where('user_id',auth()->id())->count();
        if ($cm >= 1) {
            return redirect()->back();
        }

        $comment = Comment::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $comment->id]);
        }
        if ($request->has('document_comment')) {
            return redirect()->back();
        }

        return redirect()->route('admin.comments.index');
    }

    public function edit(Comment $comment)
    {
        abort_if(Gate::denies('comment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $documents = Document::all()->pluck('document_code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $comment->load('document', 'user');

        return view('admin.comments.edit', compact('documents', 'users', 'comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        abort_if(Gate::denies('comment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $comment->update($request->all());
        if ($request->has('document_comment')) {
            return redirect()->back();
        }

        return redirect()->back();
    }

    public function show(Comment $comment)
    {
        abort_if(Gate::denies('comment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comment->load('document', 'user');

        return view('admin.comments.show', compact('comment'));
    }

    public function destroy(Comment $comment)
    {
        abort_if(Gate::denies('comment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comment->delete();

        return back();
    }

    public function massDestroy(MassDestroyCommentRequest $request)
    {
        Comment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('comment_create') && Gate::denies('comment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Comment();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
