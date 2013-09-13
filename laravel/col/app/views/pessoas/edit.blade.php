@extends('mastercad')

@section('content')
	<h1>Editar Pessoa</h1>

	{{ Form::model($pessoa, array('method'=>'PUT', 'route' => array('pessoas.update', $pessoa->id))) }}
		<p>
			{{ Form::label('Nome') }}
			{{ Form::text('nome') }}
		</p>
		<p>
			{{ Form::label('CPF/CNPJ') }}
			{{ Form::text('cpfcnpj') }}
		</p>

		<p>
			{{ Form::submit('Gravar') }}
		</p>
	{{ Form::close() }}

	@include('_partials.errors')
@stop