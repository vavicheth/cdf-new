<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreUserInfoRequest;
use App\Http\Requests\UpdateUserInfoRequest;
use App\Http\Resources\Admin\UserInfoResource;
use App\Models\UserInfo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserInfoApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('user_info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UserInfoResource(UserInfo::with(['user', 'title', 'position', 'department'])->get());
    }

    public function store(StoreUserInfoRequest $request)
    {
        $userInfo = UserInfo::create($request->all());

        if ($request->input('photo', false)) {
            $userInfo->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        return (new UserInfoResource($userInfo))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(UserInfo $userInfo)
    {
        abort_if(Gate::denies('user_info_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UserInfoResource($userInfo->load(['user', 'title', 'position', 'department']));
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

        return (new UserInfoResource($userInfo))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(UserInfo $userInfo)
    {
        abort_if(Gate::denies('user_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userInfo->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
