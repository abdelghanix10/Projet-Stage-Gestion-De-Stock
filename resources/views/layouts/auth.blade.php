<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>{{ucfirst(AppSettings::get('app_name', 'App'))}} - {{ucfirst($title)}}</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="shortcut icon" type="image/x-icon" href="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('favicon'))}} @else{{asset('assets/img/favicon.png')}} @endif">


		<link rel="stylesheet" href="assets/css/bootstrap.min.css">


		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <link rel="stylesheet" href="assets/css/style.css">

		@yield('page-css')

		
    </head>
    <body>


	<div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('assets/img/logo.png')}} @endif" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								@if ($errors->any())
									@foreach ($errors->all() as $error)
										<x-alerts.danger :error="$error" />
									@endforeach
								@endif
								@yield('content')
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

	<script src="assets/js/jquery-3.2.1.min.js"></script>


	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>


	<script src="assets/js/script.js"></script>
	<script src="{{asset('js/app.js')}}"></script>

	@yield('page-js')
</html>
