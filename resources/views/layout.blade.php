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
        <div class="container">
            <div id="particles-js">
                @yield('content')
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