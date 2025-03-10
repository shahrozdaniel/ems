<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #f4f7fa;
			font-family: Arial, sans-serif;
		}

		.login-container {
			max-width: 400px;
			margin: 0 auto;
			padding: 30px;
			background-color: #fff;
			border-radius: 8px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
		}

		h2 {
			text-align: center;
			margin-bottom: 30px;
		}

		.form-control {
			border-radius: 5px;
		}

		.btn-primary {
			width: 100%;
			border-radius: 5px;
			padding: 10px;
		}

		.alert {
			margin-bottom: 20px;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="login-container">
			<h2>Login</h2>

			@if (session()->has('error'))
				<div class="alert alert-danger" role="alert">
					{{ session('error') }}
				</div>
			@endif

			<form method="POST" action="{{ route('authenticate') }}">
				@csrf
				<div class="mb-3">
					<label for="name" class="form-label">Name</label>
					<input type="name" class="form-control" id="name" name="name" required placeholder="Enter your name">
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>