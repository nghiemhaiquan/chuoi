<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>
            <li>
                <a href="admin/theloai/danhsach"><i class="fa fa-bar-chart-o fa-fw"></i>{{ trans('website.genre') }}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.genre.list') }}">{{ trans('website.genre_list') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.genre.getAdd') }}">{{ trans('website.add_genre') }}</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/loaitin/danhsach"><i class="fa fa-bar-chart-o fa-fw"></i>{{ trans('website.singer') }}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.singer.list') }}">{{ trans('website.singer_list') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.singer.getAdd') }}">{{ trans('website.add_singer') }}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i>{{ trans('website.album') }}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.album.list') }}">{{ trans('website.album_list') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.album.getAdd') }}">{{ trans('website.add_album') }}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i>{{ trans('website.song') }}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.song.list') }}">{{ trans('website.song_list') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.song.getAdd') }}">{{ trans('website.add_song') }}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
