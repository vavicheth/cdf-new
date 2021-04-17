<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyStaffRequest;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\Department;
use App\Models\Position;
use App\Models\Staff;
use App\Models\Title;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class StaffController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('staff_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Staff::with(['title', 'department', 'position'])->orderBy('staff_code','asc')->select(sprintf('%s.*', (new Staff)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'staff_show';
                $editGate      = 'staff_edit';
                $deleteGate    = 'staff_delete';
                $crudRoutePart = 'staff';

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
            $table->editColumn('staff_code', function ($row) {
                return $row->staff_code ? $row->staff_code : "";
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('name_kh', function ($row) {
                return $row->name_kh ? $row->name_kh : "";
            });
            $table->editColumn('gender', function ($row) {
                return $row->gender ? Staff::GENDER_SELECT[$row->gender] : '';
            });
            $table->addColumn('title_name', function ($row) {
                return $row->title ? $row->title->name : '';
            });

            $table->addColumn('department_name', function ($row) {
                return $row->department ? $row->department->name : '';
            });

            $table->addColumn('position_name', function ($row) {
                return $row->position ? $row->position->name : '';
            });

            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : "";
            });
            $table->editColumn('is_active', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->is_active ? 'checked' : null) . '>';
            });
            $table->editColumn('staff_position', function ($row) {
                return $row->staff_position ? $row->staff_position : "";
            });
            $table->editColumn('photo', function ($row) {
                if ($photo = $row->photo) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });
            $table->editColumn('sigature', function ($row) {
                if ($photo = $row->sigature) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });

            $table->rawColumns(['actions', 'placeholder', 'title', 'department', 'position', 'is_active', 'photo', 'sigature']);

            return $table->make(true);
        }

        $titles      = Title::get();
        $departments = Department::get();
        $positions   = Position::get();

        return view('admin.staff.index', compact('titles', 'departments', 'positions'));
    }

    public function create()
    {
        abort_if(Gate::denies('staff_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $titles = Title::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $departments = Department::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $positions = Position::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.staff.create', compact('titles', 'departments', 'positions'));
    }

    public function store(StoreStaffRequest $request)
    {
        $staff = Staff::create($request->all());

        if ($request->input('photo', false)) {
            $staff->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        if ($request->input('sigature', false)) {
            $staff->addMedia(storage_path('tmp/uploads/' . $request->input('sigature')))->toMediaCollection('sigature');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $staff->id]);
        }

        return redirect()->route('admin.staff.index');
    }

    public function edit(Staff $staff)
    {
        abort_if(Gate::denies('staff_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $titles = Title::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $departments = Department::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $positions = Position::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $staff->load('title', 'department', 'position');

        return view('admin.staff.edit', compact('titles', 'departments', 'positions', 'staff'));
    }

    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        $staff->update($request->all());

        if ($request->input('photo', false)) {
            if (!$staff->photo || $request->input('photo') !== $staff->photo->file_name) {
                if ($staff->photo) {
                    $staff->photo->delete();
                }

                $staff->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($staff->photo) {
            $staff->photo->delete();
        }

        if ($request->input('sigature', false)) {
            if (!$staff->sigature || $request->input('sigature') !== $staff->sigature->file_name) {
                if ($staff->sigature) {
                    $staff->sigature->delete();
                }

                $staff->addMedia(storage_path('tmp/uploads/' . $request->input('sigature')))->toMediaCollection('sigature');
            }
        } elseif ($staff->sigature) {
            $staff->sigature->delete();
        }

        return redirect()->route('admin.staff.index');
    }

    public function show(Staff $staff)
    {
        abort_if(Gate::denies('staff_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $staff->load('title', 'department', 'position');

        return view('admin.staff.show', compact('staff'));
    }

    public function destroy(Staff $staff)
    {
        abort_if(Gate::denies('staff_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $staff->delete();

        return back();
    }

    public function massDestroy(MassDestroyStaffRequest $request)
    {
        Staff::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('staff_create') && Gate::denies('staff_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Staff();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
