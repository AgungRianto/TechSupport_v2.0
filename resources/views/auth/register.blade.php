<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Tech Support</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ url('frontend/login/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('frontend/login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('frontend/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('frontend/login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('frontend/login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('frontend/login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('frontend/login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('frontend/login/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100-reg">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ url('frontend/login/images/img-01.png') }}" alt="IMG">
				</div>

				<form method="POST" action="{{ route('register') }}">
                @csrf

                    <span class="login100-form-title">
                    Tech Support Registration
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid name is required: abc">
                        <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
						@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input id="password-confirm" type="password" class="input100" name="password_confirmation" placeholder="Password Confirm" required autocomplete="new-password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid job_title is required: xyz">
                        <input id="job_title" type="text" class="input100 @error('job_title') is-invalid @enderror" name="job_title" value="{{ old('job_title') }}" placeholder="Job Title" required autocomplete="job_title">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-building" aria-hidden="true"></i>
						</span>
						@error('job_title')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Register
						</button>
					</div>
                </form>
			</div>
		</div>
	</div>
</body>
	
<!--===============================================================================================-->	
	<script src="{{ url('frontend/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('frontend/login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ url('frontend/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('frontend/login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('frontend/login/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ url('frontend/login/js/main.js') }}"></script>

</body>
</html>