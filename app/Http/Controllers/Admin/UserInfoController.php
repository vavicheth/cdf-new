<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyUserInfoRequest;
use App\Http\Requests\StoreUserInfoRequest;
use App\Http\Requests\UpdateUserInfoRequest;
use App\Models\Department;
use App\Models\Position;
use App\Models\Title;
use App\Models\User;
use App\Models\UserInfo;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class UserInfoController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('user_info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = UserInfo::with(['user', 'title', 'position', 'department'])->select(sprintf('%s.*', (new UserInfo)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'user_info_show';
                $editGate      = 'user_info_edit';
                $deleteGate    = 'user_info_delete';
                $crudRoutePart = 'user-infos';

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
            $table->addColumn('user_name', function ($row) {
                return $row->user ? $row->user->name : '';
            });

            $table->editColumn('user.email', function ($row) {
                return $row->user ? (is_string($row->user) ? $row->user : $row->user->email) : '';
            });
            $table->addColumn('title_name', function ($row) {
                return $row->title ? $row->title->name : '';
            });

            $table->editColumn('title.name_kh', function ($row) {
                return $row->title ? (is_string($row->title) ? $row->title : $row->title->name_kh) : '';
            });
            $table->addColumn('position_name', function ($row) {
                return $row->position ? $row->position->name : '';
            });

            $table->editColumn('position.name_kh', function ($row) {
                return $row->position ? (is_string($row->position) ? $row->position : $row->position->name_kh) : '';
            });
            $table->addColumn('department_name', function ($row) {
                return $row->department ? $row->department->name : '';
            });

            $table->editColumn('department.name_kh', function ($row) {
                return $row->department ? (is_string($row->department) ? $row->department : $row->department->name_kh) : '';
            });
            $table->editColumn('name_kh', function ($row) {
                return $row->name_kh ? $row->name_kh : "";
            });
            $table->editColumn('gender', function ($row) {
                return $row->gender ? UserInfo::GENDER_SELECT[$row->gender] : '';
            });

            $table->editColumn('phone', function ($row) {
                return $row->phone ? $row->phone : "";
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

            $table->rawColumns(['actions', 'placeholder', 'user', 'title', 'position', 'department', 'photo']);

            return $table->make(true);
        }

        return view('admin.userInfos.index');
    }

    public function create()
    {
        abort_if(Gate::denies('user_info_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $titles = Title::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $positions = Position::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $departments = Department::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.userInfos.create', compact('users', 'titles', 'positions', 'departments'));
    }

    public function store(StoreUserInfoRequest $request)
    {
        $userInfo = UserInfo::create($request->all());

        if ($request->input('photo', false)) {
            $userInfo->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $userInfo->id]);
        }

        return redirect()->route('admin.user-infos.index');
    }

    public function edit(UserInfo $userInfo)
    {
        abort_if(Gate::denies('user_info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $titles = Title::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $positions = Position::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $departments = Department::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $userInfo->load('user', 'title', 'position', 'department');

        return view('admin.userInfos.edit', compact('users', 'titles', 'positions', 'departments', 'userInfo'));
    }

    public function update(UpdateUserInfoRequest $request, UserInfo $userInfo)
    {
        $userInfo->update($request->all());

        if ($request->input('photo', false)) {
            if (!$userInfo->photo || $request->input('photo') !== $userInfo->photo->file_name) {
                if ($userInfo->photo) {
                    $userInfo->photo->delete();
                }

                $userInfo->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($userInfo->photo) {
            $userInfo->photo->delete();
        }

        return redirect()->route('admin.user-infos.index');
    }

    public function show(UserInfo $userInfo)
    {
        abort_if(Gate::denies('user_info_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userInfo->load('user', 'title', 'position', 'department');

        return view('admin.userInfos.show', compact('userInfo'));
    }

    public function destroy(UserInfo $userInfo)
    {
        abort_if(Gate::denies('user_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userInfo->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserInfoRequest $request)
    {
        UserInfo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('user_info_create') && Gate::denies('user_info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new UserInfo();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
