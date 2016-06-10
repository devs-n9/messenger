@extends('layout')

@section('content')
<div class="sidebar" ng-controller="IndexController">
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
        <div class="row search">
            <div class="col-md-12">
                <input type="text" class="form-control" id="search" ng-model="search.name" placeholder="Search" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" ng-view="">
                
            </div>
        </div>
    </div>
</div>
@endsection