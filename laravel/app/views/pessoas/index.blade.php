@extends('mastercad')

@section('content')
	<h3>Cadastro de pessoa</h3>
	<ul class="menu">
		<li>{{ HTML::linkRoute('pessoas.create', 'Nova Pessoa')}} </li>
	</ul>
	<ul>
		@foreach($pessoas as $pessoa)
			<li>
				{{ HTML::linkRoute('pessoas.show', $pessoa->nome, $pessoa->id) }}
				<ul>
					@if($pessoa->imoveisCount > 0)
						<li>Imóveis: {{ $pessoa->imoveisCount }}</li>
					@endif
					@if($pessoa->empresasCount > 0)
						<li>Empresas: {{ $pessoa->empresasCount }}</li>
					@endif
				</ul>
			</li>
		@endforeach
	</ul>
@stop