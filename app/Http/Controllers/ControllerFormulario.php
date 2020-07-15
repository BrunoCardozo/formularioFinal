<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerFormulario extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function irSubmit( Request $request )
    {
    	$nome_completo   = $request->nome;
    	$nacionalidade   = $request->radio_nacionalidade;
    	$cpf             = $request->cpf;
    	$data_nascimento = $request->data_nascimento;
    	$uf              = $request->uf;
    	$municipio       = $request->municipio;
    	$formacao        = $request->combo_formacao;

        $array_data_formatada = $this->formataStringData($data_nascimento);

    	return view('resultado-form',compact('nome_completo','nacionalidade','cpf','array_data_formatada','uf','municipio','formacao'));
    }

    public function formataStringData( $stringData )
    {
        $arrayData = explode('-', $stringData);

        return $arrayData;
    }
}
