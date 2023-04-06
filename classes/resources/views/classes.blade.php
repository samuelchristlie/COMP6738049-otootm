<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Class List!</title>
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<meta name="description" content="" />
		<link rel="icon" href="favicon.png">
	</head>
	<body>
		<h1>List of Classes:</h1>
		@foreach($classes as $class)
		<h3>Class {{ $class->id }}: {{ ucwords($class->name) }}</h3>
		<h4>Teacher: {{ $class->teacher()->first()->name }}</h4>
		<table border="1">
			<thead>
				<tr><th colspan=2>[{{ $class->id }}] {{ ucwords($class->name) }}</th></tr>
				<tr><th colspan=2>{{ $class->teacher()->first()->name }}</th></tr>
				<tr>
					<th>ID</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($class->students()->get() as $student)
				<tr>
					<td>
						{{ $student->id }}
					</td>
					<td>
						{{ $student->name }}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		<br><br>
		
		@endforeach
	</body>
</html>