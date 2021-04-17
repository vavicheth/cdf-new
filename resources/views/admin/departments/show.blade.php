@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.department.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.departments.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.department.fields.id') }}
                        </th>
                        <td>
                            {{ $department->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.department.fields.name') }}
                        </th>
                        <td>
                            {{ $department->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.department.fields.name_kh') }}
                        </th>
                        <td>
                            {{ $department->name_kh }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.department.fields.abr') }}
                        </th>
                        <td>
                            {{ $department->abr }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.department.fields.abr_kh') }}
                        </th>
                        <td>
                            {{ $department->abr_kh }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.department.fields.description') }}
                        </th>
                        <td>
                            {{ $department->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.department.fields.is_active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $department->is_active ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.departments.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection