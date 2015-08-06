/**
 *  Drupal/AngularJS task list prototype
 *  Created by: Matt Saunders (http://studioraygun.co.uk)
 *  Date created: 28/July/2015
 */

// Set up the app and dependencies
var app = angular.module('taskApp', ['ngRoute', 'ngSanitize', 'angular-loading-bar', 'ngAnimate']);

// Configure the application routes
app.config(
	['$routeProvider', '$locationProvider',
	    function($routeProvider, $locationProvider){
	        $routeProvider
	        .when('/task/:id', {
	            templateUrl: 'single_task.php',
	            controller: 'SingleTask'
	        })
	        // Ensure hashes are removed from URL and back button works
	        $locationProvider.html5Mode(true);
	    }
	]
);