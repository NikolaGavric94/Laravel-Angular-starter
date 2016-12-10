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