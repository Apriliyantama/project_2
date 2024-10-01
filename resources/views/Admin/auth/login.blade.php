<!doctype html>
<html lang="en">
  <head>
  	<title>HealthyPet Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <base href="{{ asset('login') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="login/assets/css/style.css">
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Selamat Datang!</h2>
				</div>
				
				@if($errors->any())
					<div>
						<ul>
							@foreach ($errors->all() as $error )
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
                @endif

			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Email</h3>
					<form method="POST" action="{{ route('login') }}" class="login-form">
						@csrf
		      		<div class="form-group">
		      			<input type="email" name="email" id="email" class="form-control rounded-left" placeholder="Email" value="{{ old('email') }}" required>
		      		</div>
					<div class="form-group d-flex">
						<input type="password"name="password" id="password" class="form-control rounded-left" placeholder="Password" required>
					</div>
					<div class="form-group">
						<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
					</div>
					<div class="form-group d-md-flex">
						<div class="w-50">
							<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
					</div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>