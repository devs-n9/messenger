<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Base Application</title>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/layout.css">
</head>
<body ng-app="messenger">
<div class="row">
    <div class="col-sm-4 col-md-2 col-xs-4 sidebar">
        <div class="row" id="logo">MESSENGER</div>
        <div class="row avatar">
            <div class="col-md-12">
                <img id="avatar" src="/images/no-photo.jpg">
            </div>
        </div>
        <div class="middle-content">
        <div class="row navigation">
            <div class="col-md-2"><a href="#" class="fa fa-users" aria-hidden="true"></a></div>
            <div class="col-md-2"><a href="#" class="fa fa-camera" aria-hidden="true"></a></div>
            <div class="col-md-2"><a href="#" class="fa fa-play-circle" aria-hidden="true"></a></div>
            <div class="col-md-2"><a href="#" class="fa fa-heart" aria-hidden="true"></a></div>
            <div class="col-md-2"><a href="#" class="fa fa-glass" aria-hidden="true"></a></div>
            <div class="col-md-2"><a href="#" class="fa fa-cogs" aria-hidden="true"></a></div>
        </div>
        <div class="row search">
            <div class="col-md-12">
                <input type="text" class="form-control" id="search" ng-model="search" placeholder="Search">
            </div>
        </div>
        <ul class="nav nav-sidebar">
            <li><a href="#">
                    <img class="fr-avatar" src="/images/no-photo.jpg">
                </a>
            </li>
            <li><a href="#"><img class="fr-avatar" src="/images/no-photo.jpg"></a></li>
            <li><a href="#"><img class="fr-avatar" src="/images/no-photo.jpg"></a></li>
            <li><a href="#"><img class="fr-avatar" src="/images/no-photo.jpg"></a></li>
            <li><a href="#"><img class="fr-avatar" src="/images/no-photo.jpg"></a></li>
        </ul>
        </div>
    </div>



    <div class="col-sm-8 col-md-10 col-md-offset-2 main">
        <div class="container">
            @yield('content')
        </div>
    </div>
</div>

    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="/bower_components/angular/angular.js"></script>
    <script src="/bower_components/angular-route/angular-route.js"></script>
    <script src="/js/angular/app.js"></script>
    <script src="/js/angular/direcive.js"></script>
    <script src="/bower_components/particles.js/particles.js"></script>
    <script src="/js/messenger/init.js"></script>

</body>
</html>