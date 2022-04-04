@extends('layouts.main_layout')
	
{{-- MAIN LAYOUT FOR LOGIN --}}

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front_end/Log in/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front_end/Log in/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front_end/Log in/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('front_end/Log in/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front_end/Log in/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('front_end/Log in/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('front_end/Log in/css/main.css')}}">
<!--===============================================================================================-->


	@section('body_content')
	<div class="limiter">
		<div class="container-xxl py-5">
			<a href="{{url('/')}}"><span class="login100-form-title">
				HOMEPAGE
			</span></a>
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('front_end/Log in/images/img-01.png')}}" alt="IMG">
				</div>
				
				@yield('login_content')
				
			</div>
		</div>
	</div>
		
<!--===============================================================================================-->	
	<script src="{{asset('front_end/Log in/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('front_end/Log in/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('front_end/Log in/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('front_end/Log in/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('front_end/Log in/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('front_end/Log in/js/main.js')}}"></script>
@endsection

