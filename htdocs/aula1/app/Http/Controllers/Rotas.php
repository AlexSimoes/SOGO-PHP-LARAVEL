<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rotas extends Controller
{
    public function olaMundo() {
        return "Ola, galera!";
    }

    public function exibeFormulario() {
        return view('formulario');
    }

    public function exibeCadastro() {
        return view('cadastro');
    }

    public function cadastro(Request $request) {
        //capitura um campo
        return $request->input('cpf');
    }

    public function exibeBlade() {
        return view('pagina1');
    }

    public function exibeDados($titulo, $texto) {
        return view('exibirdados', [
            'titulo' => $titulo,
            'texto' => $texto
        ]);
    }


}

