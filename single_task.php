<div data-ng-controller="SingleTask">

	<h2 data-ng-bind-html="task.title"></h2>
	<p>
		<a href="#" data-ng-click="updateStatus(task.field_status)">
			{{ task.field_status == 1 ? 'Mark as incomplete' : 'Mark as complete' }}
		</a>
		<i class="fa fa-check" data-ng-show="task.field_status == 1"></i>
	</p>
	<!-- http://stackoverflow.com/a/12151492/874691 ternary operator -->

	<p data-ng-if="task.field_rating">Task rating: {{ task.field_rating }}</p>
	<p>Rate this task</p>
	<ul style="list-style:none; padding:0;">
		<li style="display:inline-block"><a href="#" data-ng-click="updateRating(1)">1</a> | </li>
		<li style="display:inline-block"><a href="#" data-ng-click="updateRating(2)">2</a> | </li>
		<li style="display:inline-block"><a href="#" data-ng-click="updateRating(3)">3</a> | </li>
		<li style="display:inline-block"><a href="#" data-ng-click="updateRating(4)">4</a> | </li>
		<li style="display:inline-block"><a href="#" data-ng-click="updateRating(5)">5</a></li>
	</ul>
	<hr />
	<div data-ng-bind-html="task.body"></div>
	<hr />
	<div data-ng-bind-html="task.comment"></div>


</div>