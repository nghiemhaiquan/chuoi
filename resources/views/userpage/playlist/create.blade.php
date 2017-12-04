<div class="col-md-9">
    <div class="content">
        <h3>{{ trans('website.user') }}</h3>
        <form class="post-form-wrapper" action="{{ route('userpage.playlist.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          	<label>{{ trans('website.playlist_name') }}</label>
          	<input type="text" name="name">
          	<input type="submit" name="" value="submit">
        </form>
    </div>
</div>
