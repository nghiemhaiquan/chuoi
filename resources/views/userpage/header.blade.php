<!--start header-->
<div id="header">
  <nav class="navbar navbar-default">
    <div class="container">
          <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <a class="navbar-brand" href="{{ route('home') }}"><img src="https://zmp3-static.zadn.vn/skins/zmp3-v5.1/images/logo.png" alt=""></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <a href="" class="btn"><i class="fa fa-search"></i></a>
                        </div>
                    </form>
                    <div class="menu">
                        <ul class="nav navbar-nav">
                            <li><a href="#">{{ trans('website.mp3') }}</a></li>
                            <li><a href="#">{{ trans('website.new') }}</a></li>
                            <li><a href="#">{{ trans('website.tv') }}</a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">{{ trans('website.login') }}</a></li>
                            <li><a href="{{ url('/register') }}">{{ trans('website.register') }}</a></li>
                        @else
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('userpage.profile') }}"><i class="fa fa-btn fa-sign-out"></i>{{ trans('website.profile') }}</a></li>
                            </ul>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{ trans('website.logout') }}</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </div>
    </nav>
    <div id="menu">
        <div class="container">
            <div class="container-fluid">
                <div class="row" >
                    <ul class="menu-parent">
                        <li><a href=""><i class="fa fa-home"></i></a></li>
                        <li><a href="">{{ trans('website.is_hot') }}</a>
                            <ul class="menu-child">
                                <li><a href="">{{ trans('website.Link') }}</a>
                                    <ul>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="">{{ trans('website.Link') }}</a>
                                    <ul>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="">{{ trans('website.Link') }}</a>
                                    <ul>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="">{{ trans('website.Link') }}</a>
                                    <ul>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                        <li><a href="">{{ trans('website.Link') }}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">{{ trans('website.genre') }}</a></li>
                        <li><a href="">{{ trans('website.album') }}</a></li>
                        <li><a href="">{{ trans('website.singer') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end header-->
