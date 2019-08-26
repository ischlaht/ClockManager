Ng--Angular Main
	??.) <script src="/node_modules/angular/angular.js"></script>
{{{{{{{{{{{{
=>> Manually Bootstraping and app for mulitple modules to exist on the same page or context ::
	$('#choose id for app name**dont use ng-app**').ready( function() {
		angular.bootstrap($('#Choose the elements id to use as app'), ['name the application for js']);
	});
}}}}}}}}}}}}

NG--Sanitize
 =>Must include location of file and then add to angular module as a dependancy
	 1.) <script src="path/to/ng--sanitize"></script>
	 2.) angular.module('app', ['ngSanitize']);

NG--COOKIES
 =>Must include location of file and then add to angular module as a dependancy
	 1.) <script src="path/to/ng--cookies"></script>
	 2.) angular.module('app', ['ngCookies']);

NG--ROUTE
 =>Must include location of file and then add to angular module as a dependancy
	 1.) <script src="path/to/ng--route"></script>
	 2.) angular.module('app', ['ngRoute']);

NG--ANIMATE
 =>Must include location of file and then add to angular module as a dependancy
	  1.) <script src="path/to/ng--animate"></script>
	  2.) angular.module('app', ['ngAnimate]);
	??.) angular.module('myApp', [require('angular-animate')]);

NG--TOUCH
 =>Must include location of file and then add to angular module as a dependancy
	 1.) <script src="path/to/ng--touch"></script>
	 2.) angular.module('app', ['ngTouch']);