<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidacaoController extends Controller
{
    /*public function validaTitulo (Request $request) {
        if($request->input('titulo') == '')
        return 'Título não pode ser vazio';
        if(strlen($request->input('titulo')) < 3)
        return 'Título deve ter no mínimo 3 letras';
    }*/

    public function validaTitulo(Request $request) {
        $this->validate($request, [
            'titulo' => 'required|min:3'
        ]);
    }
}
