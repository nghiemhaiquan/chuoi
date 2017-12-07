<div id='location-comment{{ $comment->id }}'>
    <li class="media">
        <span class="text-muted pull-right">
            @if (auth()->check() && (Auth::user()->id == $comment->user_id))
                <div class="dropdown">
                    <li>
                        <a href="" class="delete-comment1" id="{{ $comment->id }}">{{ trans('website.delete') }}</a>
                    </li>
                </div>
            @endif
        </span>
        <div class="media-body">
            <strong class="text-success">{{ $comment->user->name }}</strong>
            <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
            <p id="content-comment{{ $comment->id }}">{{ $comment->content }}</p>
        </div>
    </li>
</div>
