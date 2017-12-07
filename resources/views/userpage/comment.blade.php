@if (auth()->check())
    {!! Form::open() !!}
    <div class="urlcomment" data-route="{{ url('comment') }}"></div>
    {!! Form::textarea('content', null, [
        'class' => 'form-control fix-comment',
        'id' => "comment1",
        'placeholder' => trans('website.type-comment'),
        'cols' => '50',
        'rows' => '3',
    ]) !!}
    {!! Form::button(trans('website.send'), [
        'class' => 'btn btn-primary suggest-bnt',
        'id' => 'post-comment-1',
        'type' => 'button',
    ]) !!}
    {!! Form::close() !!}
@endif

@if (isset($album))
    <div class="comment-type" data-type-comment="1"></div>
@else
    <div class="comment-type" data-type-comment="0"></div>
@endif
<div class="row bootstrap snippets list-comment" >
    <div class="col-md-12 col-md-offset-0 col-sm-12">
        <div class="comment-wrapper">
            <div class="panel panel-info">
                <div class="panel-heading">
                    {{ trans('website.comment') }}({{ $comments->count() }})
                </div>
                <div class="panel-body" id="post-comment">
                    <ul class="media-list">
                        <div id = "edit-comment-aria"></div>
                        <div id = "comment2"></div>
                        @foreach ($comments as $comment)
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
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
