@extends('templates/layout-principal')

@section('style')
    <link rel="stylesheet" href="{{asset('css/formulario.css')}}" media="all" type="text/css" />
    <!-- IMPORT DE 3 SCRIPTS ABAIXO PARA O PACOTE DE MÁSCARAS DO CAMPO CPF -->
    <script type="text/javascript" src="{{asset('js/jquery-1.2.6.pack.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.maskedinput-1.1.4.pack.js')}}"/></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#cpf").mask("999.999.999-99");
    });
    </script>
@endsection

@section('conteudo')

    <form id="formulario-principal" action="{{ URL('/') }}/submit-formulario" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <input type="text" class="campo" id="nome" name="nome" placeholder="  NOME COMPLETO" required="true" onkeyup="this.value = this.value.toUpperCase();">
        </div>

        <div class="form-group">
                    
            <label class="btn-radio" style="margin-right: 10px">
                <input type="radio" onclick="desabilitaCampoCpf();" id="radio_estrangeiro" name="radio_nacionalidade" value="estrangeiro(a)">  estrangeiro(a)
            </label>
                    
            <label class="btn-radio" style="margin-right: 10px">
                <input type="radio" onclick="habilitaCampoCpf();" checked="true" id="radio_brasileiro" name="radio_nacionalidade" value="brasileiro(a)"> brasileiro(a)
            </label>

            <input type="text" class="campo" name="cpf" id="cpf" placeholder=" CPF">

        </div>

        <div class="form-group">
            <label>Data de Nascimento: </label>
            <input type="date" class="campo" name="data_nascimento" id="data-nascimento" required="true">
        </div>

        <div class="form-group">
            <input type="text" class="campo" name="uf" id="uf" placeholder="UF" required="true" maxlength="2" onkeydown="return alphaOnly(event);" onkeyup="this.value = this.value.toUpperCase();" style="width: 2%;">
            <input type="text" class="campo" name="municipio" id="municipio" placeholder="  Município" required="true" style="width: 72.5%;">
        </div>

        <div class="form-group">
            <select required="true" class="campo" name="combo_formacao" style="line-height: 1.5rem;">
                <option value="">Nível de Formação</option>
                <option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>
                <option value="Ensino Fundamental Completo">Ensino Fundamental Completo</option>
                <option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>
                <option value="Ensino Médio Completo">Ensino Médio Completo</option>
                <option value="Ensino Superior Incompleto">Ensino Superior Incompleto</option>
                <option value="Ensino Superior Completo">Ensino Superior Completo</option>
                <option value="Especialização">Especialização</option>
                <option value="Mestrado">Mestrado</option>
                <option value="Doutorado">Doutorado</option>
            </select>
        </div>

        <div class="form-group" id="botao-submit-form">
            <button type="submit" id="botao-cadastrar">Cadastrar</button>
        </div>

    </form>    

@endsection

@section('javascript')
    <script type="text/javascript" src="{{asset('js/formulario.js')}}"></script>
@endsection