# Laravel-Angular-starter

<h1>Resursi</h1>

<h2>NPM</h2>

<a href="https://nodejs.org/en/">https://nodejs.org/en/</a> Ovo se skida prvo, da bi kasnije koristili npm package manager.

<h2>Bower</h2>
`npm install -g bower` - Globalna instalacija bower-a (bez -g ukoliko želimo lokalno po projektu).

`bower install` - instalacija bower dependecija iz bower.json fajla.

<h3>Dodavanje novog dependecija u projekat:</h3>
`bower install naziv_dependecija --save` - --save, da upišemo dependeci u bower.json.

<h2>Dobra praksa pisanja Angular koda:</h2>
1) Svaka stranica mora imati svoj folder u kome će imati fajl za kontroler, css i html:<br><br>
`stranica/`<br>
  ` - stranica.controller.js`<br>
  ` - stranica.css`<br>
  ` - stranica.html` <br><br>
2) Izbegavati kreiranje promenljive za modul:<br>
```javascript
//avoid
var app = angular.module('app')
```
3) Kreiranje kontrolera: `some.controller.js` <br>
```javascript
angular
    .module('app')
    .controller('SomeCtrl', SomeCtrl);

function SomeCtrl() { 
	
}
```
4) Kreiranje servisa: `some.service.js`<br>
```javascript
angular
	.module('app')
	.service('someService', someService);

function someService() {
    
    function someFunction() {
        return "YOLO";
    }

    return {
        someFunction: someFunction
    }
}
```
5) Koristiti `angular-ui-router` (state provider) za routing, i `angular-css` za importovanje css-a na odredjeni view:<br>
```javascript
angular.module('app', [
    'ui.router',
    'angularCSS'
])

.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/');

    $stateProvider.
    state('home', {
        url: '/',
        templateUrl: 'partials/front/home/home.html',
        css: 'partials/front/home/home.css',
        controller: 'HomeCtrl'
    });

}]);
```
<h2>Angular Style Guide (Važno!!)</h2>

<a href="https://github.com/johnpapa/angular-styleguide/blob/master/a1/README.md">https://github.com/johnpapa/angular-styleguide/blob/master/a1/README.md</a>
Ovaj Angular Style Guide pogledati obavezno!
Ovde imamo opisanu dobru praksu pisanja angular koda.
