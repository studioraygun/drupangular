// Create a controller, inject scope and http
// Also inject the GetTasks service (see services.js)
app.controller('TaskList', function($scope, $http, GetTasks, $location){

    // Call the GetTasks service and the tasks method
    // Then pass the data form this to the scope
    GetTasks.tasks(function(data){
        $scope.tasks = data;
    })

    // When the newTask form element is submitted, fire this function
    $scope.newTask = function(){

        // Set up a blank object
        var package = {};
        // Pass it some detals
        package.title = [{'value': $scope.title}]
        package.body = [{'value': $scope.body}]
        package._links = {"type":{"href":"http://taskapp:8888/drupal/rest/type/node/task"}}

        // Do a http post request to the api endpoint (entity/node)
        // This page was useful for methods - https://www.drupal.org/node/2405657
        $http({
            url: 'http://taskapp:8888/drupal/entity/node',
            method: 'POST',
            data: package, // pass the data object as defined above
            headers: {
                "Authorization": "Basic YWRtaW46MTIzcXdl", // encoded user/pass - this is admin/123qwe
                //"X-CSRF-Token": "ZsCnHjuCHsEO-FLaJMfVrfcklSUFPHlc1zPeRshBpV4", // token can be found at /rest/session/token
                "Content-Type": "application/hal+json",
            },
        })
        // On success, do something
        .success(function(data, status, headers, config){

            // Clear the inputs
            $scope.title = '';
            $scope.body = '';

            // Re-call the tasks from the service. We need to do this so that the list updates
            // We could use push, but we would not be able to get the newly created URL if we took this approach
            GetTasks.tasks(function(data){
                $scope.tasks = data;
            })
        })
    }

    $scope.deleteTask = function(id){
        $http({
            url: 'http://taskapp:8888/drupal/node/' + id,
            method: 'DELETE',
            headers: {
                "Authorization": "Basic YWRtaW46MTIzcXdl", // encoded user/pass - this is admin/123qwe
                "Content-Type": "application/hal+json",
            },
        })
        .success(function(data){
            GetTasks.tasks(function(data){
                $scope.tasks = data;
            });

            // Redirect to the task list
            $location.path('/');
        })
    }

});


// Create a controller to handle viewing the task
// Pass in $routeParams which enables us to get the ID passed
// This is definedby the $routeProvider in app config
app.controller('SingleTask', function($scope, $http, $routeParams){
    $http.get('http://taskapp:8888/drupal/tasks/' + $routeParams.id)
    .success(function(data){
        $scope.task = data[0];
    });

    // When update status is clicked, fire this function and pass through the status
    $scope.updateStatus = function(status){
        // Change the status of the task
        // Check if status is true (1). If it is, change to to 0, if it isn't change it to 1
        // http://stackoverflow.com/a/18269305/874691
        status = (status == 1) ? 0 : 1;

        // Set up a blank object
        var package = {};
        // Pass it some detals
        package.field_status = [{'value': status}]
        package._links = {"type":{"href":"http://taskapp:8888/drupal/rest/type/node/task"}}

        $http({
            url: 'http://taskapp:8888/drupal/node/' + $routeParams.id, // Hit the endpoint and pass the ID of the content
            method: 'PATCH', // Send a pacth request to update the content
            data: package,
            headers: {
                "Authorization": "Basic YWRtaW46MTIzcXdl", // encoded user/pass - this is admin/123qwe
                "Content-Type": "application/hal+json",
            },
        })
        .success(function(data){
            // Update the status field in the view
            $scope.task.field_status = status;
        });
    }
});







/****


User login actually works, but the app doesn't know about it.
Some how I need to make the browser know that the user has logged in.
If you goto /drupal you'll see user is logged in, but user cannot post a new task
Cannot figure this out.

// Set up controller to handle user login
// Pass in $httpParamSerializer dependency to modify the data string to pass in correct format
app.controller('LoginForm', function($scope, $http, $httpParamSerializer){

    // Set up an object, pass a default field
    // In this case form_id = user_login_form is required by Drupal
    $scope.user = {'form_id':'user_login_form'};

    // When the user clicks login, fire this function
    $scope.userLogin = function(){

        var login_details = $scope.user.name + ":" + $scope.user.pass;
        var auth = btoa(login_details);

        $http({
            method: 'POST',
            url: 'http://taskapp:8888/drupal/user/login', // this is technically the api login endpoint (it gets suffixed with the string that is serialized below)
            data: $httpParamSerializer($scope.user), // as stated above, convert the data to the correct format. drupal login form calls itself, so we're just passing this string to the form page
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
        })
        .success(function(data, status, headers, config){
            console.log(auth);
        });
    }
})*****/