@extends('layout')

@section('content')
    <div class="row profile-block">
        <div class="sidebar col-md-3" ng-controller="IndexController">
            <div class="row" id="logo">Joinup</div>
            <div class="row avatar">
                <div class="col-md-12">
                    <img id="avatar" src="/images/no-photo.jpg">
                </div>
            </div>
            <div class="middle-content">
                <div class="row navigation">
                    <div class="col-md-2">
                        <a href="#/" class="fa fa-users" aria-hidden="true"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#/gallery" class="fa fa-camera" aria-hidden="true"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#/music" class="fa fa-play-circle" aria-hidden="true"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#/interests" class="fa fa-heart" aria-hidden="true"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#/events" class="fa fa-glass" aria-hidden="true"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#/settings" class="fa fa-cogs" aria-hidden="true"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" ng-view="">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 message-box">
            <div class="message-box-header">

            </div>
            <div class="container-fluid">
                <div class="row message-box-messages">
                    <ul></ul>
                </div>
                <form class="row message-box-form form-horizontal">
                    <div class="col-md-11">
                        <input type="text" name="msg" class="form-control msg-input" data-name="{{ Auth::user()->name }}">
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-success btn-msg">send</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection