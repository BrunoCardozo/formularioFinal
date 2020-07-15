@extends('templates/layout-principal')

@section('style')
    <link rel="stylesheet" href="{{asset('css/resultado-form.css')}}" media="all" type="text/css" />
@endsection

@section('conteudo')

    <div id="container-resultado-submit">
    	<h1>Informações Cadastradas</h1>

    	<label class="label-resultado">&#x27A3; Nome Completo: </label><span>{{$nome_completo}}</span><br>
    	<label class="label-resultado">&#x27A3; Nacionalidade: </label><span>{{$nacionalidade}}</span><br>
    	@if($nacionalidade == 'brasileiro(a)')
    		<label class="label-resultado">&#x27A3; CPF: </label><span>{{$cpf}}</span><br>
    	@endif
    	<label class="label-resultado">&#x27A3; Data de Nascimento: </label><span>{{$array_data_formatada[2]}}/{{$array_data_formatada[1]}}/{{$array_data_formatada[0]}}</span><br>
    	<label class="label-resultado">&#x27A3; UF: </label><span>{{$uf}}</span><br>
    	<label class="label-resultado">&#x27A3; Municipio: </label><span>{{$municipio}}</span><br>
    	<label class="label-resultado">&#x27A3; Formação: </label><span>{{$formacao}}</span><br>

    	<div class="form-group" id="botao-novo-cadastro">
            <a href="{{ URL('/') }}" title="cadastrar novas informações" id="link-novo-cadastro">Novo Cadastro</a>
        </div>
    </div>

@endsection

@section('javascript')
    <script type="text/javascript" src="{{asset('js/resultado-form.js')}}"></script>
@endsection