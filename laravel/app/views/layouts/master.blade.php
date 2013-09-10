<!doctype html>
<html>
	<title>
		@section('title')
			ChronosSistemas
		@show
	</title>

	@section('css')
		{{ HTML::style('metro-ui/css/modern.css') }}
		{{ HTML::style('metro-ui/css/theme-dark.css') }}
		{{ HTML::style('own/css/main.css') }}
	@show
	
</head>
<body class="metrouicss">
	<div id="wrapper">

		<div id="header">
			<div id="logo">
				<span class="logo-chronos">Chronos</span>
				<span class="logo-online">Sistemas</span>
			</div>
		</div>

		<div id="content">

			<form action="" id="a">
				<input type="submit" />
			</form>

		</div>

		<div id="footer">
		</div>
	</div>
	
	@section('js')
		{{ HTML::script('own/js/jquery-1.10.2.min.js'); }}
		{{ HTML::script('own/js/main.js'); }}
	@show

</body>
</html>