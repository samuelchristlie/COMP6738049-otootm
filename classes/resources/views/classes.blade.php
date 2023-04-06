<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Class List!</title>
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<meta name="description" content="" />
		<link rel="icon" href="favicon.png">
		<link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
		<script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
		<script src="https://cdn.tailwindcss.com"></script>
	</head>
	<body>
		<button title="Change Theme" data-toggle-theme="winter,night" data-act-class="ACTIVECLASS"
		class="fixed z-90 bottom-10 right-8 bg-base-300 w-20 h-20 rounded-full drop-shadow-lg flex justify-center items-center text-white text-4xl">&#10024;</button>
		<div class="hero min-h-screen">
			<div classes="hero-content">
				<h1 class="text-4xl text-primary font-bold mb-5 text-center">List of Classes</h1>
				@foreach($classes as $class)
				<div class="card-compact w-auto bg-base-300 rounded-3xl">
					<div class="card-body text-center">
						<h3 class="text-2xl font-bold">Class {{ $class->id }}: {{ ucwords($class->name) }}</h3>
						<h4 class="text-lg font-bold">{{ $class->teacher()->first()->name }}</h4>
						<table class="table">
							<thead>
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
						
						<!-- <br><br> -->
					</div>
				</div>
				<br>
				@endforeach
			</div>
		</div>
	</body>
</html>