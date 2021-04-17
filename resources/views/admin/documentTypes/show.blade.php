@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.documentType.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.document-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.documentType.fields.id') }}
                        </th>
                        <td>
                            {{ $documentType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.documentType.fields.value') }}
                        </th>
                        <td>
                            {{ $documentType->value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.documentType.fields.name') }}
                        </th>
                        <td>
                            {{ $documentType->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.documentType.fields.description') }}
                        </th>
                        <td>
                            {{ $documentType->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.document-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection