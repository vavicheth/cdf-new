@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.comment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.comments.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="comment">{{ trans('cruds.comment.fields.comment') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('comment') ? 'is-invalid' : '' }}" name="comment" id="comment">{!! old('comment') !!}</textarea>
                @if($errors->has('comment'))
                    <span class="text-danger">{{ $errors->first('comment') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.comment_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('submit') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="submit" value="0">
                    <input class="form-check-input" type="checkbox" name="submit" id="submit" value="1" {{ old('submit', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="submit">{{ trans('cruds.comment.fields.submit') }}</label>
                </div>
                @if($errors->has('submit'))
                    <span class="text-danger">{{ $errors->first('submit') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.submit_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="document_id">{{ trans('cruds.comment.fields.document') }}</label>
                <select class="form-control select2 {{ $errors->has('document') ? 'is-invalid' : '' }}" name="document_id" id="document_id" required>
                    @foreach($documents as $id => $document)
                        <option value="{{ $id }}" {{ old('document_id') == $id ? 'selected' : '' }}>{{ $document }}</option>
                    @endforeach
                </select>
                @if($errors->has('document'))
                    <span class="text-danger">{{ $errors->first('document') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.document_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.comment.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $user)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <span class="text-danger">{{ $errors->first('user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_esign') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_esign" value="0">
                    <input class="form-check-input" type="checkbox" name="is_esign" id="is_esign" value="1" {{ old('is_esign', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_esign">{{ trans('cruds.comment.fields.is_esign') }}</label>
                </div>
                @if($errors->has('is_esign'))
                    <span class="text-danger">{{ $errors->first('is_esign') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.is_esign_helper') }}</span>
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
                xhr.open('POST', '/admin/comments/ckmedia', true);
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
                data.append('crud_id', '{{ $comment->id ?? 0 }}');
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

@endsection