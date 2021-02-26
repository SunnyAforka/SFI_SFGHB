<div id="comment-box" class="container mt-3 d-flex justify-content-center">
    <div class="row d-flex justify-content-center" style="width: 100%">
        <div class="col-md-12">
            <div class="text-left">
                <h6 style="color: #ddd; font-size: 12px;">All comment ({{ $comment_count }})</h6>
            </div>
            <form method="POST" action="{{ route('comment.add') }}">
                @csrf
                <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                    <img class="img-fluid img-responsive rounded-circle mr-2" src="http://placehold.it/350x300/033148/ffffff?text={{Str::substr(Auth()->user()->name, 0, 1)}}" width="40" height="33">
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <input type="text" name="comment" class="form-control mr-3" placeholder="Add comment">
                    <button class="btn btn-primary" type="submit"> <i class="ion ion-android-send" style="font-size: 24px; color: red"></i> </button>
                </div>
            </form>

                @foreach ($comments as $comment)
                    <div class="card p-1" style="background: inherit">
                        <div class="d-flex flex-row"> <img src="http://placehold.it/350x300/033148/ffffff?text={{Str::substr(Auth()->user()->name, 0, 1)}}" height="35" width="35" class="rounded-circle">
                            <div class="d-flex flex-column ms-2">
                                <h6 class="mb-1 text-primary">{{ $comment->user->name }}</h6>
                                <p class="comment-text"> {{ $comment->comment }} </p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row gap-3 align-items-center">
                            </div>
                            <div class="d-flex flex-row"> <span class="text-muted fw-normal fs-10">{{ $comment->created_at }}</span> </div>
                        </div>
                    </div>
                @endforeach

                {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {{ $comments->links('pagination::bootstrap-4') }}
            </div>

        </div>
    </div>
</div>
