<!DOCTYPE html>
<html lang="en" ng-app="taskApp">
    <head>
        <base href="/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AngularJS/Drupal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
        <script src="https://code.angularjs.org/1.4.3/angular-route.min.js"></script>
        <script src="https://code.angularjs.org/1.4.3/angular-sanitize.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/loading-bar.css">
        <script src="app.js"></script>
        <script src="services.js"></script>
        <script src="controllers.js"></script>
        <script src="vendor/loading-bar.js"></script>
        <style>
            .sidebar{
                float:left;
                padding:30px;
                width:30%;
                background-color:#f4f4f4;
                position:fixed;
                height:100%;
            }
            .content{
                float:left;
                padding:30px;
                width:70%;
                margin-left:30%;
            }
            hr{
                border-top:1px solid #ddd;
            }
            input,textarea{
                margin-bottom:8px;
            }
        </style>
    </head>
    <body>
        <div data-ng-controller="TaskList" class="sidebar">
            <h1>Tasks</h1>
            <h5>Drupal 8 and AngularJS</h5>
            <hr />

            <ul class="tasks">
                <li data-ng-repeat="task in tasks | filter:taskFilter | orderBy:'task.nid'">
                    <a href="task/{{ task.nid }}" data-ng-bind-html="task.title"></a>
                </li>
            </ul>
            <hr />

            <form data-ng-submit="newTask()">
                <div class="form-group">
                    <label>Create a new task</label>
                    <input data-ng-model="title" class="form-control" placeholder="Task title" autofocus  />
                    <textarea data-ng-model="body" class="form-control" placeholder="Task description"></textarea>
                    <button class="btn btn-primary" type="submit">Add Task</button>
                </div>
            </form>
            <hr />

            <form>
                <div class="form-group">
                    <label>Search tasks</label>
                    <input data-ng-model="taskFilter" class="form-control" placeholder="Search term" />
                </div>
            </form>
        </div>

        <div data-ng-view class="content"></div>

    </body>
</html>