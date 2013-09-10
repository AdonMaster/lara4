@extends('mastercad')

@section('content')
	<ul>
		<li>{{ HTML::linkRoute('pessoas.edit', 'Editar', $pessoa->id) }}</li>
		<li>
			{{ Form::model($pessoa, array('method'=>'DELETE', 'route'=>array('pessoas.destroy', $pessoa->id))) }}
			{{ Form::submit('Deletar') }}
			{{ Form::close() }}
		</li>
	</ul>

	<h1>{{ $pessoa->nome }}</h1>
	<p>{{ $pessoa->cpfcnpj }}</p>

	<h4>Lista de empresas:</h4>
	<ul>
	@foreach($empresas as $empresa)
		<li> {{$empresa->id}} - {{$empresa->nome_fantasia}} </li>
	@endforeach
	</ul>
	<h4>Lista de imóveis:</h4>
	<ul>
	@foreach($imoveis as $imovel)
		<li> {{$imovel->id}} - {{$imovel->inscricao}} </li>
	@endforeach
	</ul>
	<?php //echo $empresas->links(); ?>

	@include('_partials.errors')
@stop