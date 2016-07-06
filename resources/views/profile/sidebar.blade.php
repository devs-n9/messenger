@extends('layout')

@section('content')
<div class="row profile-block" ng-controller="IndexController">
    <div class="sidebar col-md-3" >
        <div class="row" id="logo">Joinup</div>
        <div class="row avatar">
            <input type="file" class="uploader-image" fileupload>
            <div class="col-md-12">
                @if(!empty($profile->avatar))
                <img id="avatar" src="/img/upload/{{ $profile->avatar }}" ng-click="uploadimage()">
                @else
                <img id="avatar" src="/images/no-photo.jpg" ng-click="uploadimage()">
                @endif
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
                <ul>
                    <li ng-repeat="msg in msgs"><span>[[ msg.name ]]</span>: [[ msg.msg ]] <small class="pull-right">[[ msg.created_at ]]</small></li>
                </ul>
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
    <!--MODAL-->
    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="img-container img-preview">
                        <img id="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" ng-click="saveimg()">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection