<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/teste', function() {
    //boa pratica usar o return
    return "Minha primeira rota";
});

Route::get('/php-info', function(){
    phpinfo();
});

/*Route::get('/formulario', function() {
    return '
    <form action="/processa" method="post">
        Nome: <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>
    ';
});*/

Route::post('/processa', function(){
    print_r(Request::all());
});

Route::get('/bemvindo/{nome}/{idade}', function($nome, $idade){
    printf("Bem vindo, %s, com %s anos", $nome, $idade);
})->where ('idade', '[0-9]+')->where('nome','Alex');

Route::get('/olamundo','Rotas@olaMundo');
Route::get('/formulario','Rotas@exibeFormulario');

Route::get('/cadastro', 'Rotas@exibeCadastro');
Route::put('/exibeCadastro', 'Rotas@cadastro');

Route::get('/template', 'Rotas@exibeBlade' );

//via de rota
/*Route::get('/dados', function () {
    return view('exibirdados', [
        'titulo' => 'Aula na sogo neste sabado',
        'texto' => 'Lorem Ipsim Lorem Ipsim Lorem Ipsim'
    ]);
}); */

Route::get('/dados/{titulo}/{texto}', 'Rotas@exibeDados');

Route::get('/se', function () {
    return view('se', [
        'lista' => [10,20,30,"alou"]
    ]);
});

Route::get('/form', function() {
    return view('form');
});
Route::post('/form',
'ValidacaoController@validaTitulo');

Route::resource('/livro', 'LivroController');
