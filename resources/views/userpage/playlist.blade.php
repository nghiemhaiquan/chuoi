@extends('userpage.master')

@section('playlist')

<div id="playlist">
    <div class="container">
        <div class="wrap">
            <div class="row">
                <div class="col-md-3">
                    <ul class="menu-playlist">
                        <li class="user-playlist">
                            <img src="">
                            <a href="#">{{ trans('website.user') }}</a>
                        </li>
                        <li class="list">
                            <a href="#">{{ trans('website.user') }}</a>
                            <ul>
                                <li><a href="">{{ trans('website.user') }}</a></li>
                                <li><a href="">{{ trans('website.user') }}t</a></li>
                                <li><a href="">{{ trans('website.user') }}</a></li>
                            </ul>
                        </li>
                        <li class="list">
                            <a href="">{{ trans('website.user') }}/a>
                        </li>
                        <li class="list">
                            <a href="">{{ trans('website.user') }}</a>
                            <ul>
                                <li><a href="">{{ trans('website.user') }}</a></li>
                                <li><a href="">{{ trans('website.user') }}</a></li>
                                <li><a href="">{{ trans('website.user') }}</a></li>
                            </ul>
                        </li>
                        <li class="list">
                            <a href="">{{ trans('website.user') }}</a>
                        </li>
                        <li class="list">
                            <a href="">{{ trans('website.user') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="content">
                        <h3>{{ trans('website.user') }}</h3>
                        <div class="button">
                            <a href=""><i class="fa fa-list"></i>{{ trans('website.user') }}</a>
                        </div>
                        <div class="playlist">
                            <img src="">
                            <h4><a href="">{{ trans('website.user') }}</a></h4>
                            <p>{{ trans('website.user') }}</p>
                            <p>{{ trans('website.user') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
