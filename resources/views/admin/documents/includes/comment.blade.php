@if ($document->getType() <> 'deny_view' || auth()->user()->can('comment_grand_access') )
    @if (auth()->user()->can('comment_access'))

        <div>
            <div class="card card-primary card-outline card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-comments" data-toggle="pill" href="#tab-comments" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Comments</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="tab-comments">
                        <div class="tab-pane fade show active" id="tab-comments" role="tabpanel" aria-labelledby="tab-comments">

                        @foreach($users as $user)
                            <!-- Message. Default to the left -->
                                <div class="direct-chat-msg direct-chat-success">
                                    <div class="direct-chat-infos clearfix mb-2">
                                        <span class="direct-chat-name float-left">{{$user->name}}</span>
                                        {{--                                <span class="direct-chat-timestamp float-right">{{$document->documentComments->where('user_id',$user->id)-> ? '23 Jan 5:37 pm':''}}</span>--}}
                                        <span class="direct-chat-timestamp float-right">
                                    @foreach($user->comments as $comment)
                                                {{$comment->updated_at ?? ''}}
                                            @endforeach
                                </span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img" src="{{asset('photos/avatars/default.png')}}" alt="message user image">
                                    <!-- /.direct-chat-img -->


                                @if ($user->comments->count() < 1)
                                    @include('admin.documents.includes.chat_waiting')
                                @else
                                    @foreach($user->comments as $comment)
                                        <!-- Comment user in document -->
                                            <div class="direct-chat-text">
                                                {!! $comment->comment!!}
                                            </div>
                                            <!-- /Comment user in document -->
                                            <!-- action button comment -->
                                            @if (!$comment->submit || auth()->user()->can('comment_grand_access'))
                                                <div class="float-right">
                                                    <button type="button" class="btn btn-xs text-secondary" data-toggle="modal" data-target="#deldoc"><i class="fas fa-times"></i></button>
                                                    <button type="button" class="btn btn-xs text-secondary" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
                                                    <button type="button" class="btn btn-xs text-secondary" data-toggle="modal" data-target="#submit"><i class="fas fa-check"></i></button>
                                                </div>
                                            @endif
                                        @endforeach

                                    @endif
                                </div>
                                <!-- /.direct-chat-msg -->
                            @endforeach


                            @if ($user->comments->count() < 1 || auth()->user()->can('comment_grand_access'))
                                @include('admin.documents.includes.chat_input')
                            @endif

                        </div>
                    </div>

                </div>
                <!-- /.card -->
            </div>
        </div>



        {{--<livewire:documents.comment :document="$document"/>--}}
    @endif
@endif
