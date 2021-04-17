<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Http\Resources\Admin\StaffResource;
use App\Models\Staff;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StaffApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('staff_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StaffResource(Staff::with(['title', 'department', 'position'])->get());
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

        return (new StaffResource($staff))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Staff $staff)
    {
        abort_if(Gate::denies('staff_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StaffResource($staff->load(['title', 'department', 'position']));
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

        return (new StaffResource($staff))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Staff $staff)
    {
        abort_if(Gate::denies('staff_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $staff->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
