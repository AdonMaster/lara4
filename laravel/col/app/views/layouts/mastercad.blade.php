<!DOCTYPE html>
<html>
<head>
	<title>jamantino</title>
</head>
<style type="text/css">
	#wrapper {
		width: 1000px;
		margin: auto;
	}
</style>
<body>

	<div id="wrapper">
		<ul>
			<li>{{ HTML::linkRoute('pessoas.index', 'Pessoas') }}</li>
			<li>{{ HTML::linkRoute('imoveis.index', 'Imoveis') }}</li>
			<li>{{ HTML::linkRoute('empresas.index', 'Empresas') }}</li>
		</ul>

		<h1>You needed me</h1>

		@yield('content')

		<small>Adon LTDA</small>
	</div>
</body>
</html>