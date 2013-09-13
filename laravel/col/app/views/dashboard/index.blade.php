@extends('layouts.master')

@section('content')
	<h3>Menu</h3>

	<div class="tile double bg-color-green">
		<div class="tile-content">
	        <a href="{{ route('pessoas.index') }}"><h1>Cadastro de Contribuinte</h1></a>
	        <p>
	            Pesquise o contribuinte aqui nessa ferramenta incrível!
	        </p>
	    </div>
	    <div class="brand">
            <div class="badge">99+</div>
            <img src="images/Mail128.png" class="icon">
        </div>
	</div>

	<div class="tile double bg-color-blue"></div>
	<div class="tile double bg-color-blue"></div>
	<div class="tile double bg-color-blue"></div>
	<div class="tile double bg-color-blue"></div>
	<div class="tile double bg-color-blue"></div>
@stop