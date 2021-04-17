<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAppSeetingRequest;
use App\Http\Requests\StoreAppSeetingRequest;
use App\Http\Requests\UpdateAppSeetingRequest;
use App\Models\AppSeeting;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AppSeetingController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('app_seeting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appSeetings = AppSeeting::with(['media'])->get();

        return view('admin.appSeetings.index', compact('appSeetings'));
    }

    public function create()
    {
        abort_if(Gate::denies('app_seeting_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.appSeetings.create');
    }

    public function store(StoreAppSeetingRequest $request)
    {
        $appSeeting = AppSeeting::create($request->all());

        if ($request->input('photo', false)) {
            $appSeeting->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $appSeeting->id]);
        }

        return redirect()->route('admin.app-seetings.index');
    }

    public function edit(AppSeeting $appSeeting)
    {
        abort_if(Gate::denies('app_seeting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.appSeetings.edit', compact('appSeeting'));
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

        return redirect()->route('admin.app-seetings.index');
    }

    public function show(AppSeeting $appSeeting)
    {
        abort_if(Gate::denies('app_seeting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.appSeetings.show', compact('appSeeting'));
    }

    public function destroy(AppSeeting $appSeeting)
    {
        abort_if(Gate::denies('app_seeting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appSeeting->delete();

        return back();
    }

    public function massDestroy(MassDestroyAppSeetingRequest $request)
    {
        AppSeeting::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('app_seeting_create') && Gate::denies('app_seeting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new AppSeeting();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
