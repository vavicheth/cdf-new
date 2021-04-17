@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.department.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.departments.update", [$department->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.department.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $department->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.department.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_kh">{{ trans('cruds.department.fields.name_kh') }}</label>
                <input class="form-control {{ $errors->has('name_kh') ? 'is-invalid' : '' }}" type="text" name="name_kh" id="name_kh" value="{{ old('name_kh', $department->name_kh) }}">
                @if($errors->has('name_kh'))
                    <span class="text-danger">{{ $errors->first('name_kh') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.department.fields.name_kh_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="abr">{{ trans('cruds.department.fields.abr') }}</label>
                <input class="form-control {{ $errors->has('abr') ? 'is-invalid' : '' }}" type="text" name="abr" id="abr" value="{{ old('abr', $department->abr) }}">
                @if($errors->has('abr'))
                    <span class="text-danger">{{ $errors->first('abr') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.department.fields.abr_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="abr_kh">{{ trans('cruds.department.fields.abr_kh') }}</label>
                <input class="form-control {{ $errors->has('abr_kh') ? 'is-invalid' : '' }}" type="text" name="abr_kh" id="abr_kh" value="{{ old('abr_kh', $department->abr_kh) }}">
                @if($errors->has('abr_kh'))
                    <span class="text-danger">{{ $errors->first('abr_kh') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.department.fields.abr_kh_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.department.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $department->description) }}</textarea>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.department.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_active" value="0">
                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $department->is_active || old('is_active', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">{{ trans('cruds.department.fields.is_active') }}</label>
                </div>
                @if($errors->has('is_active'))
                    <span class="text-danger">{{ $errors->first('is_active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.department.fields.is_active_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection