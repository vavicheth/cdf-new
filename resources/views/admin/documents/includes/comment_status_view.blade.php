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
                                    @if (!$loop->first)
                                        <hr>
                                    @endif
                                    @include('admin.documents.includes.user_profile')

                                @if ($user->comments->count() < 1)
                                    @include('admin.documents.includes.chat_waiting')
                                @else
                                    @if ($user->id == auth()->id() || auth()->user()->can('comment_grand_access'))
                                        @foreach($user->comments as $comment)
                                                <!-- Comment user in document -->
                                                    <div class="direct-chat-text">
                                                        {!! $comment->comment!!}
                                                    </div>
                                                    <!-- /Comment user in document -->
                                                @if ($comment->submit == 0 ||  auth()->user()->can('comment_grand_edit'))
                                                    <!-- action button comment -->
                                                        @include('admin.documents.includes.action_button_comment')
                                                    @endif

                                                @include('admin.documents.includes.modal')
                                        @endforeach
                                    @else
                                        @include('admin.documents.includes.chat_check')
                                    @endif


                                @endif
                                </div>
                                <!-- /.direct-chat-msg -->
                            @endforeach

                            @if (($users->whereIn('id',auth()->id())->count() > 0 && $document->documentComments()->where('user_id', auth()->id())->count() < 1) || auth()->user()->can('comment_grand_access'))
                                @include('admin.documents.includes.chat_input')
                            @endif

                        </div>
                    </div>

                </div>
                <!-- /.card -->
            </div>
        </div>

