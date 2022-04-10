@extends('auth.passwords.login')

@section('title', 'Freelancer | Login')
@section('login_content')

<form class="login100-form validate-form" action="{{ route('freelancer.check') }}" method="post">
	<span class="login100-form-title">
		Freelancer Login
	</span>

	@if (Session::get('fail'))
	<div class="alert alert-danger">
		{{ Session::get('fail') }}
	</div>
	@endif
	
	@csrf
	<div class="wrap-input100 validate-input form-control @error('email') is-invalid @enderror"
		data-validate="Valid email is required: ex@abc.xyz">
		<input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
		<span class="focus-input100"></span>
		<span class="symbol-input100">
			<i class="fa fa-envelope" aria-hidden="true"></i>
		</span>
	</div>

	<div class="wrap-input100 validate-input form-control @error('password') is-invalid @enderror"
		data-validate="Password is required">
		<input class="input100" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
		<span class="focus-input100"></span>
		<span class="symbol-input100">
			<i class="fa fa-lock" aria-hidden="true"></i>
		</span>
	</div>


	<div class="container-login100-form-btn">
		<button class="login100-form-btn" type="submit">
			Login
		</button>
	</div>

	<div class="text-center p-t-12">
		<span class="txt1">
			Forgot
		</span>
		<a class="txt2" href="#">
			Username / Password?
		</a>
	</div>

	<div class="text-center p-t-136">
		<a class="txt2" href="{{route('freelancer.register')}}">
			Create your Account
			<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
		</a>
	</div>
</form>
@endsection