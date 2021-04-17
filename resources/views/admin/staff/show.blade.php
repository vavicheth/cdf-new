@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.staff.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.staff.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.id') }}
                        </th>
                        <td>
                            {{ $staff->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.staff_code') }}
                        </th>
                        <td>
                            {{ $staff->staff_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.name') }}
                        </th>
                        <td>
                            {{ $staff->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.name_kh') }}
                        </th>
                        <td>
                            {{ $staff->name_kh }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.gender') }}
                        </th>
                        <td>
                            {{ App\Models\Staff::GENDER_SELECT[$staff->gender] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.title') }}
                        </th>
                        <td>
                            {{ $staff->title->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.department') }}
                        </th>
                        <td>
                            {{ $staff->department->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.position') }}
                        </th>
                        <td>
                            {{ $staff->position->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.dob') }}
                        </th>
                        <td>
                            {{ $staff->dob }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.phone') }}
                        </th>
                        <td>
                            {{ $staff->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.email') }}
                        </th>
                        <td>
                            {{ $staff->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.is_active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $staff->is_active ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.staff_position') }}
                        </th>
                        <td>
                            {{ $staff->staff_position }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.photo') }}
                        </th>
                        <td>
                            @if($staff->photo)
                                <a href="{{ $staff->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $staff->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.staff.fields.sigature') }}
                        </th>
                        <td>
                            @if($staff->sigature)
                                <a href="{{ $staff->sigature->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $staff->sigature->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.staff.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection