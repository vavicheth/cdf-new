@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.appSeeting.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.app-seetings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.appSeeting.fields.id') }}
                        </th>
                        <td>
                            {{ $appSeeting->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appSeeting.fields.name') }}
                        </th>
                        <td>
                            {{ $appSeeting->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appSeeting.fields.value') }}
                        </th>
                        <td>
                            {{ $appSeeting->value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appSeeting.fields.description') }}
                        </th>
                        <td>
                            {{ $appSeeting->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appSeeting.fields.photo') }}
                        </th>
                        <td>
                            @if($appSeeting->photo)
                                <a href="{{ $appSeeting->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $appSeeting->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.app-seetings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection