@extends('mastercad')

@section('content')
	<h3>Cadastro de Imoveis</h3>

	<ul class="menu">
		<li>{{ HTML::linkRoute('imoveis.create', 'Novo Imovel')}} </li>
	</ul>
	<ul>
		@foreach($imoveis as $imovel)
			<li>
				{{ HTML::linkRoute('imoveis.show', $imovel->inscricao, $imovel->id) }}
				@if(isset($imovel->pessoa))
					<strong>{{ $imovel->pessoa->nome .' ['. $imovel->pessoa->cpfcnpj .']' }}</strong>
				@else
					<strong>-</strong>
				@endif

			</li>
		@endforeach
	</ul>
@stop