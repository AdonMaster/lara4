@extends('mastercad')

@section('content')
	<ul>
		<li>{{ HTML::linkRoute('empresas.edit', 'Editar', $empresa->id) }}</li>
		<li>
			{{ Form::model($empresa, array('method'=>'DELETE', 'route'=>array('empresas.destroy', $empresa->id))) }}
			{{ Form::submit('Deletar') }}
			{{ Form::close() }}
		</li>
	</ul>

	<h1>Inscricao: {{ $empresa->inscricao }}</h1>
	<h3>Nome Fantasia: {{ $empresa->nome_fantasia }}</h3>
	<h3>Proprietario : {{ $empresa->pessoa ? $empresa->pessoa->nome : '[Sem Proprietário]' }} </h3>

	<?php //echo $empresas->links(); ?>

	@include('_partials.errors')
@stop