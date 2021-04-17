<div class="float-right">
    <button type="button" class="btn btn-xs text-secondary" data-toggle="modal" data-target="#deldoc{{$comment->id}}"><i class="fas fa-times"></i></button>
    <button type="button" class="btn btn-xs text-secondary" data-toggle="modal" data-target="#edit{{$comment->id}}"><i class="fas fa-edit"></i></button>
    @if ($comment->submit == 1 && auth()->user()->can('comment_grand_edit'))
        <button type="button" class="btn btn-xs text-secondary" data-toggle="modal" data-target="#resubmit{{$comment->id}}"><i class="fas fa-undo"></i></button>
    @else
        <button type="button" class="btn btn-xs text-secondary" data-toggle="modal" data-target="#submit{{$comment->id}}"><i class="fas fa-check"></i></button>
    @endif

</div>
