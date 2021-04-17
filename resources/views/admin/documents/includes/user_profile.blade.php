<div class="direct-chat-infos clearfix mb-2">
    <span class="direct-chat-name float-left">
        {{$user->staff ? (($user->staff->position ? $user->staff->position->name_kh : '') . ($user->staff->department ? ($user->staff->department->name_kh) : $user->name)) : $user->name}}៖
        {{$user->staff ? (($user->staff->title ? $user->staff->title->name_kh : '') . ' ' . $user->staff->name_kh) : $user->name}}
    </span>
    <span class="direct-chat-timestamp float-right">
        @foreach($user->comments as $comment)
            {{$comment->updated_at ?? ''}}
        @endforeach
    </span>
</div>
<!-- /.direct-chat-infos -->
<img class="direct-chat-img" src="{{$user->isPhoto() ? $user->staff->photo->url : asset('photos/avatars/default.png')}}" alt="message user image">
<!-- /.direct-chat-img -->
