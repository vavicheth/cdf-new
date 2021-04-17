<hr>
<!-- Input comment -->
<div class="direct-chat-msg">
    <!-- /.direct-chat-infos -->
    <img class="direct-chat-img" src="{{auth()->user()->isPhoto() ? auth()->user()->staff->photo->url : asset('photos/avatars/default.png')}}" alt="message user image">
    <!-- /.direct-chat-img -->

    <form method="POST" action="{{ route("admin.comments.store") }}" enctype="multipart/form-data">
        @csrf
        <div class="direct-chat-text">
            <input type="hidden" name="document_id" value="{{$document->id}}">
            <input type="hidden" name="user_id" value="{{auth()->id()}}">
            <!-- for redirect back from controller -->
            <input type="hidden" name="document_comment" value="">
            <div class="form-group">
                <label for="comment">{{auth()->user()->staff ? ((auth()->user()->staff->title ? auth()->user()->staff->title->name_kh : '') . ' ' . auth()->user()->staff->name_kh) : auth()->user()->name}}</label>
                <textarea class="form-control ckeditor {{ $errors->has('comment') ? 'is-invalid' : '' }}" name="comment" id="comment">{!! old('comment') !!}</textarea>
                @if($errors->has('comment'))
                    <span class="text-danger">{{ $errors->first('comment') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.comment_helper') }}</span>
            </div>
            <div class="form-check">
                <input type="hidden" name="is_esign" value="0">
                <input class="form-check-input" type="checkbox" name="is_esign" id="is_esign" value="1" {{ old('is_esign', 0) == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="is_esign">E-Signature</label>
            </div>
        </div>
        <!-- /.direct-chat-text -->
        <div class="float-right mt-1">
            <button type="submit" class="btn btn-sm btn-success" data-toggle="modal" data-target="#deldoc"><i class="fas fa-paper-plane"></i> Send</button>
        </div>
    </form>
</div>
<!-- /.direct-chat-msg -->
