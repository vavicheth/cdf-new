@extends('layouts.admin')

@section('style')
    <link href="{{asset('js/plugins/select2-4.0/select2.min.css')}}" rel="stylesheet" />
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.document.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.documents.update", [$document->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="letter_code">{{ trans('cruds.document.fields.letter_code') }}</label>
                <input class="form-control {{ $errors->has('letter_code') ? 'is-invalid' : '' }}" type="text" name="letter_code" id="letter_code" value="{{ old('letter_code', $document->letter_code) }}">
                @if($errors->has('letter_code'))
                    <span class="text-danger">{{ $errors->first('letter_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.letter_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="code_in">{{ trans('cruds.document.fields.code_in') }}</label>
                <input class="form-control {{ $errors->has('code_in') ? 'is-invalid' : '' }}" type="text" name="code_in" id="code_in" value="{{ old('code_in', $document->code_in) }}">
                @if($errors->has('code_in'))
                    <span class="text-danger">{{ $errors->first('code_in') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.code_in_helper') }}</span>
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="code_out">{{ trans('cruds.document.fields.code_out') }}</label>--}}
{{--                <input class="form-control {{ $errors->has('code_out') ? 'is-invalid' : '' }}" type="text" name="code_out" id="code_out" value="{{ old('code_out', $document->code_out) }}">--}}
{{--                @if($errors->has('code_out'))--}}
{{--                    <span class="text-danger">{{ $errors->first('code_out') }}</span>--}}
{{--                @endif--}}
{{--                <span class="help-block">{{ trans('cruds.document.fields.code_out_helper') }}</span>--}}
{{--            </div>--}}
            <div class="form-group">
                <label for="document_code">{{ trans('cruds.document.fields.document_code') }}</label>
                <input class="form-control {{ $errors->has('document_code') ? 'is-invalid' : '' }}" type="text" name="document_code" id="document_code" value="{{ old('document_code', $document->document_code) }}">
                @if($errors->has('document_code'))
                    <span class="text-danger">{{ $errors->first('document_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.document_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="from_organisation">{{ trans('cruds.document.fields.from_organisation') }}</label>
                <input class="form-control {{ $errors->has('from_organisation') ? 'is-invalid' : '' }}" type="text" name="from_organisation" id="from_organisation" value="{{ old('from_organisation', $document->from_organisation) }}">
                @if($errors->has('from_organisation'))
                    <span class="text-danger">{{ $errors->first('from_organisation') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.from_organisation_helper') }}</span>
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="category_id">{{ trans('cruds.document.fields.category') }}</label>--}}
{{--                <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id">--}}
{{--                    @foreach($categories as $id => $category)--}}
{{--                        <option value="{{ $id }}" {{ (old('category_id') ? old('category_id') : $document->category->id ?? '') == $id ? 'selected' : '' }}>{{ $category }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--                @if($errors->has('category'))--}}
{{--                    <span class="text-danger">{{ $errors->first('category') }}</span>--}}
{{--                @endif--}}
{{--                <span class="help-block">{{ trans('cruds.document.fields.category_helper') }}</span>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label class="required" for="organisation_id">{{ trans('cruds.document.fields.organisation') }}</label>--}}
{{--                <select class="form-control select2 {{ $errors->has('organisation') ? 'is-invalid' : '' }}" name="organisation_id" id="organisation_id" required>--}}
{{--                    @foreach($organisations as $id => $organisation)--}}
{{--                        <option value="{{ $id }}" {{ (old('organisation_id') ? old('organisation_id') : $document->organisation->id ?? '') == $id ? 'selected' : '' }}>{{ $organisation }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--                @if($errors->has('organisation'))--}}
{{--                    <span class="text-danger">{{ $errors->first('organisation') }}</span>--}}
{{--                @endif--}}
{{--                <span class="help-block">{{ trans('cruds.document.fields.organisation_helper') }}</span>--}}
{{--            </div>--}}
            <div class="form-group">
                <label for="users">{{ trans('cruds.document.fields.user') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
{{--                <select class="form-control select2 {{ $errors->has('users') ? 'is-invalid' : '' }}" name="users[]" id="users" multiple>--}}
{{--                    @foreach($users as $id => $user)--}}
{{--                        <option value="{{ $id }}" {{ (in_array($id, old('users', [])) || $document->users->contains($id)) ? 'selected' : '' }}>{{ $user }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
                {!! Form::select('users[]', $users, [], ['class' => 'form-control select2', 'id'=>'users','multiple'=>'true']) !!}
                @if($errors->has('users'))
                    <span class="text-danger">{{ $errors->first('users') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.document.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description', $document->description) !!}</textarea>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="document_file">{{ trans('cruds.document.fields.document_file') }}</label>
                <div class="needsclick dropzone {{ $errors->has('document_file') ? 'is-invalid' : '' }}" id="document_file-dropzone">
                </div>
                @if($errors->has('document_file'))
                    <span class="text-danger">{{ $errors->first('document_file') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.document_file_helper') }}</span>
            </div>

            @can('document_type_edit')
            <div class="form-group">
                <label class="required" for="document_type_id">{{ trans('cruds.document.fields.document_type') }}</label>
                <select class="form-control select2 {{ $errors->has('document_type') ? 'is-invalid' : '' }}" name="document_type_id" id="document_type_id" required>
                    @foreach($document_types as $id => $document_type)
                        <option value="{{ $id }}" {{ (old('document_type_id') ? old('document_type_id') : $document->document_type->id ?? '') == $id ? 'selected' : '' }}>{{ $document_type }}</option>
                    @endforeach
                </select>
                @if($errors->has('document_type'))
                    <span class="text-danger">{{ $errors->first('document_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.document_type_helper') }}</span>
            </div>
            @endcan

            <div class="form-group">
                <label for="dateline">{{ trans('cruds.document.fields.dateline') }}</label>
                <input class="form-control date {{ $errors->has('dateline') ? 'is-invalid' : '' }}" type="text" name="dateline" id="dateline" value="{{ old('dateline', $document->dateline) }}">
                @if($errors->has('dateline'))
                    <span class="text-danger">{{ $errors->first('dateline') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.dateline_helper') }}</span>
            </div>

            @can('document_complete_edit')
            <div class="form-group">
                <label for="date_complete">{{ trans('cruds.document.fields.date_complete') }}</label>
                <input class="form-control date {{ $errors->has('date_complete') ? 'is-invalid' : '' }}" type="text" name="date_complete" id="date_complete" value="{{ old('date_complete', $document->date_complete) }}">
                @if($errors->has('date_complete'))
                    <span class="text-danger">{{ $errors->first('date_complete') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.date_complete_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('complete') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="complete" value="0">
                    <input class="form-check-input" type="checkbox" name="complete" id="complete" value="1" {{ $document->complete || old('complete', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="complete">{{ trans('cruds.document.fields.complete') }}</label>
                </div>
                @if($errors->has('complete'))
                    <span class="text-danger">{{ $errors->first('complete') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.complete_helper') }}</span>
            </div>
            @endcan

            <div class="form-group">
                <div class="form-check {{ $errors->has('submit') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="submit" value="0">
                    @can('document_submit_access')
                    <input class="form-check-input" type="checkbox" name="submit" id="submit" value="1" {{ $document->submit || old('submit', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="submit">{{ trans('cruds.document.fields.submit') }}</label>
                    @endcan
                </div>
                @if($errors->has('submit'))
                    <span class="text-danger">{{ $errors->first('submit') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.document.fields.submit_helper') }}</span>
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
    <script src="{{asset('js/plugins/select2-4.0/select2.min.js')}}"></script>
<script>
    $('#document_code').inputmask("99-99-9999");
    $(document).ready(function(){

        // $("#users").select2({tags: []});
        // $("#users").on("change", function() { $("#users_val").html($("#users").val());});
        //
        // $("#users").select2("container").find("ul.select2-choices").sortable({
        //     containment: 'parent',
        //     start: function() { $("#users").select2("onSortStart"); },
        //     update: function() { $("#users").select2("onSortEnd"); }
        // });

        // $("#users").select2({tags: ['test','speed']});

        $("#users").val({{$users_doc->pluck('id')}}).select2();
        $("#users").trigger('change');


        $("#users").on("select2:select", function (evt) {
            var element = evt.params.data.element;
            var $element = $(element);

            $element.detach();
            $(this).append($element);
            $(this).trigger("change");
        });

        // $("#users").select2("container").find("ul.select2-choices").sortable({
        //     containment: 'parent',
        //     start: function() { $("#e15").select2("onSortStart"); },
        //     update: function() { $("#e15").select2("onSortEnd"); }
        // });

        // $("#users").on("select2:select", function (evt) {
        //     var element = evt.params.data.element;
        //     var $element = $(element);
        //
        //     window.setTimeout(function () {
        //         if ($("#users").find(":selected").length > 1) {
        //             var $second = $("#users").find(":selected").eq(-2);
        //             $element.detach();
        //             $second.after($element);
        //         }
        //         else {
        //             $element.detach();
        //             $("#users").prepend($element);
        //         }
        //
        //         $("#users").trigger("change");
        //     }, 1);
        //
        // });

    });

    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/admin/documents/ckmedia', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $document->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    var uploadedDocumentFileMap = {}
Dropzone.options.documentFileDropzone = {
    url: '{{ route('admin.documents.storeMedia') }}',
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 10
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="document_file[]" value="' + response.name + '">')
      uploadedDocumentFileMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedDocumentFileMap[file.name]
      }
      $('form').find('input[name="document_file[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($document) && $document->document_file)
          var files =
            {!! json_encode($document->document_file) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="document_file[]" value="' + file.file_name + '">')
            }
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
