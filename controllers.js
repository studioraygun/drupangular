// Create a controller, inject scope and http
// Also inject the GetTasks service (see services.js)
app.controller('TaskList', function($scope, $http, GetTasks){

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
                "X-CSRF-Token": "1YXotIM8Aonl0eA1Fz50-f46pPYzGNhvwDoyv85_sdM", // token can be found at /rest/session/token
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
});


// Create a controller to handle viewing the task
// Pass in $routeParams which enables us to get the ID passed
// This is definedby the $routeProvider in app config
app.controller('singleTask', function($scope, $http, $routeParams){
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
            url: 'http://taskapp:8888/drupal/node/' + $routeParams.id,
            method: 'PATCH',
            data: package,
            headers: {
                "Authorization": "Basic YWRtaW46MTIzcXdl", // encoded user/pass - this is admin/123qwe
                "X-CSRF-Token": "1YXotIM8Aonl0eA1Fz50-f46pPYzGNhvwDoyv85_sdM", // token can be found at /rest/session/token
                "Content-Type": "application/hal+json",
            },
        })
        .success(function(data){
            // Update the status field in the view
            console.log(status);
            $scope.task.field_status = status;
        });
    }
});