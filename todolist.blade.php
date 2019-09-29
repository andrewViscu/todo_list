<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<ul>
			 @foreach ($todo_functions as $function)
				<li>{{$function}}</li>
			 @endforeach
		</ul>
		<p>Usernames of users, created lists</p>
			<ul>
				@foreach ($lists as $list)
						<li>{{$list->username}}</li>
				@endforeach
			</ul>
		<p>Lists</p>
		<ul>
			@foreach ($lists as $list)
				<li><a href="todolist/{{$list->id}}">{{$list->listname}}</a></li>
			@endforeach
		</ul>
</body>
</html>