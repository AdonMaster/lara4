@extends('mastercad')

@section('content')
	<h1>Editar Imovel</h1>

	{{ Form::model($imovel, array('method'=>'PUT', 'route' => array('imoveis.update', $imovel->id))) }}
		<p>
			{{ Form::label('Inscricao') }}
			{{ Form::text('inscricao') }}
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