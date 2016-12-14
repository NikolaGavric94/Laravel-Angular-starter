<!DOCTYPE html>
<html lang="en" ng-app="app">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">

        <!-- External styles -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css">

    </head>
    <body>
        <div class="container">
            <ui-view></ui-view>
        </div>
    </body>
    {{-- All scripts go here! --}}
    <!-- Angular Components -->
    <script src="bower_components/angular/angular.min.js"></script>
    <script src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script src="bower_components/angular-css/angular-css.min.js"></script>

    <!-- Main js -->
    <script src="js/app.js"></script>

    <!-- Controllers -->
    <script src="partials/home/home.controller.js"></script>
    <script src="partials/admin/dashboard/dashboard.controller.js"></script>

    <!-- Services -->
    <script src="js/services/some.service.js"></script>

    <!-- External dependencies -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
