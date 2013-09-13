@extends('mastercad')

@section('content')
	<h1>VAMO CRIAR EMPRESA</h1>

	{{ Form::open(array('route' => 'empresas.store')) }}
		<p>
			{{ Form::label('Nome Fantasia') }}
			{{ Form::text('nome_fantasia') }}
		</p>
		<p>
			{{ Form::label('Inscrição') }}
			{{ Form::text('inscricao') }}
		</p>
		<p>
			{{ Form::label('Código Pessoa') }}
			{{ Form::text('pessoa_id') }}
		</p>

		<p>
			{{ Form::submit('Gravar') }}
		</p>
	{{ Form::close() }}

	@include('_partials.errors')
@stop