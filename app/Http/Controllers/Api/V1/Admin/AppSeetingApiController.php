<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreAppSeetingRequest;
use App\Http\Requests\UpdateAppSeetingRequest;
use App\Http\Resources\Admin\AppSeetingResource;
use App\Models\AppSeeting;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AppSeetingApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('app_seeting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AppSeetingResource(AppSeeting::all());
    }

    public function store(StoreAppSeetingRequest $request)
    {
        $appSeeting = AppSeeting::create($request->all());

        if ($request->input('photo', false)) {
            $appSeeting->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        return (new AppSeetingResource($appSeeting))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AppSeeting $appSeeting)
    {
        abort_if(Gate::denies('app_seeting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AppSeetingResource($appSeeting);
    }

    public function update(UpdateAppSeetingRequest $request, AppSeeting $appSeeting)
    {
        $appSeeting->update($request->all());

        if ($request->input('photo', false)) {
            if (!$appSeeting->photo || $request->input('photo') !== $appSeeting->photo->file_name) {
                if ($appSeeting->photo) {
                    $appSeeting->photo->delete();
                }

                $appSeeting->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($appSeeting->photo) {
            $appSeeting->photo->delete();
        }

        return (new AppSeetingResource($appSeeting))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AppSeeting $appSeeting)
    {
        abort_if(Gate::denies('app_seeting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appSeeting->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
