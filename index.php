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
        <script src="https://code.angularjs.org/1.4.3/angular-animate.min.js"></script>
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

            /* when hiding the picture */
            .ng-hide-add         { animation:0.5s lightSpeedOut ease; }

            /* when showing the picture */
            .ng-hide-remove      { animation:0.5s flipInX ease; }

            /* ANIMATIONS (FROM ANIMATE.CSS) ======================== */
            /* flip in */
            @keyframes flipInX {
              0% {
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                transition-timing-function: ease-in;
                opacity: 0;
              }

              40% {
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transition-timing-function: ease-in;
                transition-timing-function: ease-in;
              }

              60% {
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                opacity: 1;
              }

              80% {
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
              }

              100% {
                transform: perspective(400px);
                transform: perspective(400px);
                transform: perspective(400px);
              }
            }

            /* light speed out */
            @keyframes lightSpeedOut {
              0% {
                opacity: 1;
              }

              100% {
                transform: translate3d(100%, 0, 0) skewX(30deg);
                transform: translate3d(100%, 0, 0) skewX(30deg);
                opacity: 0;
              }
            }

            @keyframes lightSpeedOut {
              0% {
                opacity: 1;
              }

              100% {
                transform: translate3d(100%, 0, 0) skewX(30deg);
                transform: translate3d(100%, 0, 0) skewX(30deg);
                transform: translate3d(100%, 0, 0) skewX(30deg);
                opacity: 0;
              }
            }
        </style>
    </head>
    <body>

        <!--
        Commenting out user login form

        <div data-ng-controller="LoginForm">
            {{user}}
            <form data-ng-submit="userLogin()">
                <div class="form-group">
                    <label>Username</label>
                    <input data-ng-model="user.name" name="name" class="form-control" />
                    <label>Password</label>
                    <input data-ng-model="user.pass" type="password" name="pass" class="form-control" />
                    <input type="hidden" data-ng-model="user.form_id" name="form_id" value="user_login_form" />
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>-->

        <div data-ng-controller="TaskList" class="sidebar">
            <h1>Tasks</h1>
            <h5>Drupal 8 and AngularJS</h5>
            <hr />

            <ul class="tasks">
                <li data-ng-repeat="task in tasks | filter:taskFilter | orderBy:'-nid' | limitTo:5">
                    <a href="task/{{ task.nid }}" data-ng-bind-html="task.title"></a>
                    (<a href="#" data-ng-click="deleteTask(task.nid)">Delete</a>)
                </li>
            </ul>
            <hr />

            <!--<button data-ng-click="newTaskDialog = 1">Create a new task</button>-->

            <form data-ng-submit="newTask()" > <!--data-ng-show="newTaskDialog == 1"-->
                <div class="form-group">
                    <label>Create a new task</label>
                    <input data-ng-model="title" class="form-control" placeholder="Task title" autofocus  />
                    <textarea data-ng-model="body" class="form-control" placeholder="Task description"></textarea>
                    <button class="btn btn-primary" type="submit">Add Task</button>
                    <!--<p><a href="#" data-ng-click="newTaskDialog = 0">Close this</a></p>-->
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