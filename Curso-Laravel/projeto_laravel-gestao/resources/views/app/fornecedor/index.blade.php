@php 
	// COMENTÁRIOS DE UMA LINHA
	/* COMENTÁRIOS COM BLADE E PHP PURO


	if() {

	} else if () {

	} else {

	} */

@endphp

{{-- COMENTÁRIO COM BLADE, TRABALHAR COM PESSOAS COMENTAR CÓDIGO --}}

{{-- UNLESS RETORNA A CONDIÇÃO CASO SEJA FALSA, O CONTRÁRIO DO IF --}}

<h2>Fornecedor teste</h2>
{{-- @dd($fornecedores) --}} 
{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
	<h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
	<h3>Existem vários fornecedores cadastrados</h3>
@else
	<h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}


@isset($fornecedores)
Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if($fornecedores[0]['status'] == 'N')
	Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S')
	Fornecedor inativo via unless
@endunless
<br>
@empty($fornecedores[1]['status'])
	Status está vazio
@endempty
<br>
Telefone: ({{ $fornecedores[0]['ddd'] ?? ''}}) {{ $fornecedores[0]['telefone'] }}
<br>
<!-- 
	Caso não tenha o Break vai executar todos os cases]
	Default executa caso não tenha nenhum case
-->
@switch($fornecedores[0]['nome'])
	@case('Fornecedor 1')
		Tem o DDD de São Paulo
		@break
	@case('Fornecedor')
		Tem o DDD de Maringá
		@break
	@default	
@endswitch
<br>
{{-- Utilizar FOR com laravel, Inicio, Enquanto --}}
@for ($i = 0; isset($fornecedores[$i]); $i++)
	Fornecedor: {{ $fornecedores[$i]['nome'] }} <br>
@endfor
<hr>
{{-- While(Condição) --}}
@php $i = 0 @endphp
@While(isset($fornecedores[$i])) 
	Status: {{ $fornecedores[$i]['status'] }}
	<br>
	@php $i++ @endphp
@endwhile
<hr>
{{-- @foreach array que será percorrido as indices que serão percorrido => copia dos valores --}}
@foreach ($fornecedores as $indice => $fornecedor)
	DDD: {{ $fornecedor['telefone'] }}
	<br>
@endforeach
<hr>
{{-- @forelse vai percorrer caso a condição esteja ok, desviar o fluxo para o empty
	@loop utilizada para utilizar variáveis de controle iteration par mostrar interações
	first mostra a primeira interação
	--}}
@forelse ($fornecedores as $indice => $fornecedor)
	Interação atual: {{ $loop->iteration }}
	<br>
	DDD: {{ $fornecedor['nome'] }}
	<br>
	@if ($loop->first)
		Primeira interação do Loop
		<br>
	@endif
	@if ($loop->last)
		Ultíma interação do Loop
		<br>
		Total de registros: {{ $loop->count }}
		<br>
	@endif
	@empty
	Não existem nomes cadastrados
@endforelse
@endisset