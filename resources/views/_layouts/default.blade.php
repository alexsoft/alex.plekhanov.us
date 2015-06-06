<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Web Artisan, Developer, PHP Developer, Web Developer, JS Developer, Laravel Developer, Laravel, Javascript, JS, Javascript Developer, PHP">
		<meta name="author" content="Alexey Plekhanov">
		<link rel="icon" href="{{ asset('ico/favicon.ico') }}">

		<meta name="google-site-verification" content="dW-i1q_ReYQ2XTd7hwnMo7J-ER6A33yAScHyxw9Zqu4" />
		<meta name='yandex-verification' content='625e2fdaac325346' />

		<title>@yield('page_title', 'Alex.Plekhanov.us')</title>
		@section('css')
			<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		@show

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('ico/touch144.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('ico/touch114.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('ico/touch72.png') }}">
		<link rel="apple-touch-icon-precomposed" href="{{ asset('ico/touch57.png') }}">
	</head>
	@if(Route::is('pages.cv'))
		<body class="cv">
	@else
		<body>
	@endif

		@include('_partials.nav')

		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<div class="row">
						<div class="col-lg-8 col-md-10">
							@yield('content')
						</div>
						@unless(Route::is('home'))
							@include('_partials.aside')
						@endunless
					</div>
				</div>
			</div>
		</div>

		@include('_partials.footer')

		@section('js')
			<script src="{{ asset('js/all.js') }}"></script>
		@show
	</body>
</html>