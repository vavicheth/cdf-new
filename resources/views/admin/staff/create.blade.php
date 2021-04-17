@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.staff.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.staff.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="staff_code">{{ trans('cruds.staff.fields.staff_code') }}</label>
                <input class="form-control {{ $errors->has('staff_code') ? 'is-invalid' : '' }}" type="text" name="staff_code" id="staff_code" value="{{ old('staff_code', '') }}" required>
                @if($errors->has('staff_code'))
                    <span class="text-danger">{{ $errors->first('staff_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.staff_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.staff.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name_kh">{{ trans('cruds.staff.fields.name_kh') }}</label>
                <input class="form-control {{ $errors->has('name_kh') ? 'is-invalid' : '' }}" type="text" name="name_kh" id="name_kh" value="{{ old('name_kh', '') }}" required>
                @if($errors->has('name_kh'))
                    <span class="text-danger">{{ $errors->first('name_kh') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.name_kh_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.staff.fields.gender') }}</label>
                <select class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender" id="gender">
                    <option value disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Staff::GENDER_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('gender', 'male') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="title_id">{{ trans('cruds.staff.fields.title') }}</label>
                <select class="form-control select2 {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title_id" id="title_id">
                    @foreach($titles as $id => $title)
                        <option value="{{ $id }}" {{ old('title_id') == $id ? 'selected' : '' }}>{{ $title }}</option>
                    @endforeach
                </select>
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="department_id">{{ trans('cruds.staff.fields.department') }}</label>
                <select class="form-control select2 {{ $errors->has('department') ? 'is-invalid' : '' }}" name="department_id" id="department_id">
                    @foreach($departments as $id => $department)
                        <option value="{{ $id }}" {{ old('department_id') == $id ? 'selected' : '' }}>{{ $department }}</option>
                    @endforeach
                </select>
                @if($errors->has('department'))
                    <span class="text-danger">{{ $errors->first('department') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.department_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="position_id">{{ trans('cruds.staff.fields.position') }}</label>
                <select class="form-control select2 {{ $errors->has('position') ? 'is-invalid' : '' }}" name="position_id" id="position_id">
                    @foreach($positions as $id => $position)
                        <option value="{{ $id }}" {{ old('position_id') == $id ? 'selected' : '' }}>{{ $position }}</option>
                    @endforeach
                </select>
                @if($errors->has('position'))
                    <span class="text-danger">{{ $errors->first('position') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.position_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dob">{{ trans('cruds.staff.fields.dob') }}</label>
                <input class="form-control date {{ $errors->has('dob') ? 'is-invalid' : '' }}" type="text" name="dob" id="dob" value="{{ old('dob') }}">
                @if($errors->has('dob'))
                    <span class="text-danger">{{ $errors->first('dob') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.dob_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.staff.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.staff.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_active" value="0">
                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', 0) == 1 || old('is_active') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">{{ trans('cruds.staff.fields.is_active') }}</label>
                </div>
                @if($errors->has('is_active'))
                    <span class="text-danger">{{ $errors->first('is_active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.is_active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="staff_position">{{ trans('cruds.staff.fields.staff_position') }}</label>
                <input class="form-control {{ $errors->has('staff_position') ? 'is-invalid' : '' }}" type="text" name="staff_position" id="staff_position" value="{{ old('staff_position', '') }}">
                @if($errors->has('staff_position'))
                    <span class="text-danger">{{ $errors->first('staff_position') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.staff_position_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="photo">{{ trans('cruds.staff.fields.photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="photo-dropzone">
                </div>
                @if($errors->has('photo'))
                    <span class="text-danger">{{ $errors->first('photo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.photo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sigature">{{ trans('cruds.staff.fields.sigature') }}</label>
                <div class="needsclick dropzone {{ $errors->has('sigature') ? 'is-invalid' : '' }}" id="sigature-dropzone">
                </div>
                @if($errors->has('sigature'))
                    <span class="text-danger">{{ $errors->first('sigature') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.staff.fields.sigature_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.staff.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($staff) && $staff->photo)
      var file = {!! json_encode($staff->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    Dropzone.options.sigatureDropzone = {
    url: '{{ route('admin.staff.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="sigature"]').remove()
      $('form').append('<input type="hidden" name="sigature" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="sigature"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($staff) && $staff->sigature)
      var file = {!! json_encode($staff->sigature) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="sigature" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection