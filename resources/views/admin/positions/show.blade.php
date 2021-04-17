@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.position.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.positions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.position.fields.id') }}
                        </th>
                        <td>
                            {{ $position->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.position.fields.name') }}
                        </th>
                        <td>
                            {{ $position->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.position.fields.name_kh') }}
                        </th>
                        <td>
                            {{ $position->name_kh }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.position.fields.description') }}
                        </th>
                        <td>
                            {{ $position->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.position.fields.is_active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $position->is_active ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.positions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection