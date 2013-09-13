@extends('mastercad')

@section('content')
	<h1>Editar Empresa</h1>

	{{ Form::model($empresa, array('method'=>'PUT', 'route' => array('empresas.update', $empresa->id))) }}
		<p>
			{{ Form::label('Inscricao') }}
			{{ Form::text('inscricao') }}
		</p>
		<p>
			{{ Form::label('Nome Fantasia') }}
			{{ Form::text('nome_fantasia') }}
		</p>
		<p>
			{{ Form::label('Pessoa') }}
			{{ Form::text('pessoa_id') }}
		</p>

		<p>
			{{ Form::submit('Gravar') }}
		</p>
	{{ Form::close() }}

	@include('_partials.errors')
@stop