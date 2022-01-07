<!DOCTYPE html>
{{-- <html lang="en" dir="ltr"> --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
	<head>
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Meta data -->
		 <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Car" name="description">
		<meta content="Levis" name="author">
		<meta name="keywords" content="Car"/>
         @include('layouts.head')
		 {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> --}}
	</head>


	<body class="app dark-mode">

		<!---Global-loader-->
		<div id="global-loader" >
			{{-- <img src="{{URL::asset('assets/images/svgs/loader.svg')}}" alt="loader"> --}}
		</div>
		<!--- End Global-loader-->

		<!-- Page -->
		<div class="page">
			<div class="page-main">
			
			@include('layouts.header')
				@include('layouts.horizontal-menu')
				<!-- Hor-Content -->
				<div class="hor-content main-content">
					<div class="container">
						@yield('page-header')
						@yield('content')
						@include('layouts.footer')
		</div><!-- End Page -->
			@include('layouts.footer-scripts')
	</body>
</html>
		