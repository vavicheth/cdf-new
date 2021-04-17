<!-- Modal Edit-->
<div class="modal fade" id="edit{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">កែប្រែយោបល់</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::model($comment,['method'=>'PATCH','route'=>['admin.comments.update',$comment->id],'files'=>true]) !!}
            <div class="modal-body">
                <input hidden name="user_id" value="{{$comment->user_id}}" >
                <input hidden name="document_id" value="{{$document->id}}" >
                <!-- for redirect back from controller -->
                <input type="hidden" name="document_comment" value="">
                <div class="form-group">
                    <textarea name="comment" class="form-control ckeditor" id="mt{{$comment->id}}" required> {{$comment->comment}} </textarea>
                </div>

                <div class="form-check {{ $errors->has('is_esign') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_esign" value="0">
                    <input class="form-check-input" type="checkbox" name="is_esign" id="is_esign" value="1" {{ $comment->is_esign || old('is_esign', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_esign">E-Signature</label>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">រក្សាទុក </button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>


<!-- Modal Delete-->
<div class="modal fade" id="deldoc{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure delete this Document?
                You won't be able to revert this!
            </div>
            <div class="modal-footer">

                {!! Form::open(['method'=>'DELETE','route'=>['admin.comments.destroy',$comment->id]]) !!}
                @csrf
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input hidden name="doc" value="{{$document->id}}" >
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<!-- Modal Submit-->
<div class="modal fade" id="submit{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">បញ្ចប់ការបញ្ចេញយោបល់</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure Submit this comment? &nbsp;
                You won't be able to edit or delete this comment!
            </div>
            <div class="modal-footer">

                {!! Form::model($comment,['method'=>'PATCH','route'=>['admin.comments.update',$comment->id],'files'=>true]) !!}
                @csrf
                <input hidden name="submit" value="1" >
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<!-- Modal Restore Submit-->
<div class="modal fade" id="resubmit{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ត្រលប់បញ្ចប់ការបញ្ចេញយោបល់</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure Restore Submit this comment? &nbsp;
            </div>
            <div class="modal-footer">

                {!! Form::model($comment,['method'=>'PATCH','route'=>['admin.comments.update',$comment->id],'files'=>true]) !!}
                @csrf
                <input hidden name="submit" value="0" >
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success"><i class="fa fa-undo"></i> Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
