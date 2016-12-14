angular.module('app', [
    'ui.router',
    'angularCSS'
])

.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/');

    $stateProvider.
    state('home', {
        url: '/',
        templateUrl: 'partials/home/home.html',
        css: 'partials/home/home.css',
        controller: 'HomeCtrl'
    });

    $stateProvider.
    state('dashboard', {
        url: '/dashboard',
        templateUrl: 'partials/admin/dashboard/dashboard.html',
        css: 'partials/admin/dashboard/dashboard.css',
        controller: 'DashboardCtrl'
    });

}]);