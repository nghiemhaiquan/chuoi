<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="admin/theloai/danhsach"><i class="fa fa-bar-chart-o fa-fw"></i> Genre<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('GenreList') }}">Genre list</a>
                    </li>
                    <li>
                        <a href="{{ route('GenreAdd') }}">Add genre</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="admin/loaitin/danhsach"><i class="fa fa-bar-chart-o fa-fw"></i> Singer<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('SingerList') }}">Singer list</a>
                    </li>
                    <li>
                        <a href="{{ route('SingerAdd') }}">Add singer</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i> Album <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('AlbumList') }}">Album list</a>
                    </li>
                    <li>
                        <a href="{{ route('AlbumAdd') }}">Add album</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i> Song <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('SongList') }}">Song list</a>
                    </li>
                    <li>
                        <a href="{{ route('SongAdd') }}">Add song</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>

