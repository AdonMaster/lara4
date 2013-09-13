@extends('mastercad')

@section('content')
	<h3>Cadastro de Imoveis</h3>

	<ul class="menu">
		<li>{{ HTML::linkRoute('empresas.create', 'Nova Empresa')}} </li>
	</ul>
	<ul>
		@foreach($empresas as $empresa)
			<li>
				{{ HTML::linkRoute('empresas.show', $empresa->nome_fantasia, $empresa->id) }}
				@if(isset($empresa->pessoa))
					<strong>{{ $empresa->pessoa->nome .' ['. $empresa->pessoa->cpfcnpj .']' }}</strong>
				@else
					<strong>-</strong>
				@endif

			</li>
		@endforeach
	</ul>
@stop