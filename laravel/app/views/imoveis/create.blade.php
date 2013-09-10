@extends('mastercad')

@section('content')
	<h1>VAMO CRIAR IMOVEL</h1>

	{{ Form::open(array('route' => 'imoveis.store')) }}
		<p>
			{{ Form::label('inscricao', 'Inscrição') }}
			{{ Form::text('inscricao') }}
		</p>
		<p>
			{{ Form::label('pessoa_id', 'Pessoa (código, por ora)') }}
			{{ Form::text('pessoa_id') }}
		</p>

		<p>
			{{ Form::submit('Gravar') }}
		</p>
	{{ Form::close() }}

	@include('_partials.errors')
@stop