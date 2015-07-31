// Set up a service to get all tasks, pass in the http dependency
app.service('GetTasks', function($http){
    // This (as in, this function), refers to the getTasks function
    this.tasks = getTasks;

    // Set up a function to get the tasks, passing in a callback
    // This means that on success, the data is passed from the successful get request, into a call back
    // This is then subsequently passed whenever it is requested by a controller
    function getTasks(callback){
        $http.get('http://taskapp:8888/drupal/tasks')
        // On success, pass the results to the view via the scope object
        .success(function(data){
            callback(data);
        })
    }
});


app.service('GetUser', function($http){

});