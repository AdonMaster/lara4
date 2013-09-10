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
<body>
	<div id="wrapper" class="metrouicss">

		<div id="header">
			<div id="logo">
				<span class="logo-chronos">Chronos</span>
				<span class="logo-online">Sistemas</span>
			</div>
		</div>

		<div id="content">

			<div class="message-dialog bg-color-green fg-color-white">
                <p>Content for message dialog</p>
            	<button class="place-right close">Click me</button>
			</div>

		</div>

		<div id="footer">
		</div>
	</div>
	
	@section('js')
		{{ HTML::script('own/js/jquery-1.10.2.min.js'); }}
		{{ HTML::script('metro-ui/javascript/dialog.js'); }}
	@show

</body>
</html>