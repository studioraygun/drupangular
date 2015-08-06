// Set up a service to get all tasks, pass in the http dependency
app.service('TaskService', ['$http', 
    function($http){

    this.getTasks = function(callback){
        $http.get('http://taskapp:8888/drupal/tasks')
        // On success, pass the results to the view via the scope object
        .success(function(data){
            callback(data);
        });
    };

    this.addTask = function(package){
        return $http({
            url: 'http://taskapp:8888/drupal/entity/node',
            method: 'POST',
            data: package, // pass the data object as defined above
            headers: {
                "Authorization": "Basic YWRtaW46MTIzcXdl", // encoded user/pass - this is admin/123qwe
                "Content-Type": "application/hal+json",
            },
        })
    };

    this.deleteTask = function(id){
        return $http({
            url: 'http://taskapp:8888/drupal/node/' + id,
            method: 'DELETE',
            headers: {
                "Authorization": "Basic YWRtaW46MTIzcXdl", // encoded user/pass - this is admin/123qwe
                "Content-Type": "application/hal+json",
            },
        })
    }

    this.updateTaskStatus = function(id, package){
        return $http({
            url: 'http://taskapp:8888/drupal/node/' + id, // Hit the endpoint and pass the ID of the content
            method: 'PATCH', // Send a pacth request to update the content
            data: package,
            headers: {
                "Authorization": "Basic YWRtaW46MTIzcXdl", // encoded user/pass - this is admin/123qwe
                "Content-Type": "application/hal+json",
            },
        })
    }

    this.updateTaskRating = function(id, package){
        return $http({
            url: 'http://taskapp:8888/drupal/node/' + id, // Hit the endpoint and pass the ID of the content
            method: 'PATCH', // Send a pacth request to update the content
            data: package,
            headers: {
                "Authorization": "Basic YWRtaW46MTIzcXdl", // encoded user/pass - this is admin/123qwe
                "Content-Type": "application/hal+json",
            },
        })
    }
    
}]);





app.service('TestService', function(){

    // create new object called thing
    // this (thing) . answer is equal to 2*2
    function thing(paramOne, paramTwo){
        this.answer = paramOne * paramTwo;

        // we could pass two parameters to thing()
        // function thing(paramOne,paramTwo)
        //      this.answer = paramOne * paramTwo
        //
        // then when calling it call new Thing(5,5) to get 5 * 5
    }

    // return this to the controller
    // we are returning a new invocation of the thing() object and putting under "answer"
    return{
        answer: new thing(5,5)
    }
})





var myObject = { // object
    firstName: "John", // property
    lastName: "McLain", // property
    fullName: function(){ // method
        return this.firstName + " " + this.lastName;
    }
}
//console.log(myObject.fullName());


// create a function, with two arguments
// define the arguments inside the function
function myFunction(arg1,arg2){
    this.firstName = arg1;
    this.lastName = arg2;
}

// create a new variable, which is actually a new object. 
// this new object is an invocation of the myFunction function
var x = new myFunction("John", "Mclain");

// data from the object now becomes available to the variable object
//console.log(x.firstName);