@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.title.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.titles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.title.fields.id') }}
                        </th>
                        <td>
                            {{ $title->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.title.fields.name') }}
                        </th>
                        <td>
                            {{ $title->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.title.fields.name_kh') }}
                        </th>
                        <td>
                            {{ $title->name_kh }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.title.fields.abr') }}
                        </th>
                        <td>
                            {{ $title->abr }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.title.fields.abr_kh') }}
                        </th>
                        <td>
                            {{ $title->abr_kh }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.title.fields.description') }}
                        </th>
                        <td>
                            {{ $title->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.title.fields.is_active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $title->is_active ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.titles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection