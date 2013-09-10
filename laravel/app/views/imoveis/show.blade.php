@extends('mastercad')

@section('content')
	<ul>
		<li>{{ HTML::linkRoute('imoveis.edit', 'Editar', $imovel->id) }}</li>
		<li>
			{{ Form::model($imovel, array('method'=>'DELETE', 'route'=>array('imoveis.destroy', $imovel->id))) }}
			{{ Form::submit('Deletar') }}
			{{ Form::close() }}
		</li>
	</ul>

	<h1>Inscricao: {{ $imovel->inscricao }}</h1>
	<h1>Proprietario : {{ $imovel->pessoa ? $imovel->pessoa->nome : '[Sem Proprietário]' }} </h1>

	<?php //echo $empresas->links(); ?>

	@include('_partials.errors')
@stop