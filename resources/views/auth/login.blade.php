@extends('layouts.layout_login')

@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">										
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ url('frontend/login/images/img-01.png') }}" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ URL('/login') }}">
				{{@csrf_field()}}
					<span class="login100-form-title">
						Tech Support Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
						<input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password">
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
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						@if (Route::has('password.request'))
							<a class="txt2" href="{{ route('password.request') }}">
								Password?
							</a>
						@endif
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="{{ route('register') }}">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection