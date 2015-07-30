<div data-ng-controller="singleTask">
	<h2 data-ng-bind-html="task.title"></h2>
	<p><a href="#" data-ng-click="updateStatus(task.field_status)">{{ task.field_status }}</a></p>
	<hr />
	<div data-ng-bind-html="task.body"></div>
</div>