@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.userInfo.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.user-infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.id') }}
                        </th>
                        <td>
                            {{ $userInfo->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.user') }}
                        </th>
                        <td>
                            {{ $userInfo->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.title') }}
                        </th>
                        <td>
                            {{ $userInfo->title->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.position') }}
                        </th>
                        <td>
                            {{ $userInfo->position->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.department') }}
                        </th>
                        <td>
                            {{ $userInfo->department->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.name_kh') }}
                        </th>
                        <td>
                            {{ $userInfo->name_kh }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.gender') }}
                        </th>
                        <td>
                            {{ App\Models\UserInfo::GENDER_SELECT[$userInfo->gender] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.dob') }}
                        </th>
                        <td>
                            {{ $userInfo->dob }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.phone') }}
                        </th>
                        <td>
                            {{ $userInfo->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userInfo.fields.photo') }}
                        </th>
                        <td>
                            @if($userInfo->photo)
                                <a href="{{ $userInfo->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $userInfo->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.user-infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection