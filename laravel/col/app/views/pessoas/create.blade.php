@extends('mastercad')

@section('content')
	<h1>VAMO CRIAR PESSOA</h1>

	{{ Form::open(array('route' => 'pessoas.store')) }}
		<p>
			{{ Form::text('nome') }}
		</p>
		<p>
			{{ Form::text('cpfcnpj') }}
		</p>

		<p>
			{{ Form::submit('Gravar') }}
		</p>
	{{ Form::close() }}

	@include('_partials.errors')
@stop