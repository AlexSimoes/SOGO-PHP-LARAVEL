<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculadora extends Controller
{
    public function somar() {
        return view('soma');
    }

    public function exibeSoma(Request $request) {
        return $request->input('n1') + $request->input('n2');
    }

    public function subtrair() {
        return view('subtracao');
    }

    public function Dividir() {
        return view('divisao');
    }

    public function Multiplicar() {
        return view('multiplicacao');
    }

}
