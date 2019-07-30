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
    return view('index.inicial');
})->name('inicio');

Route::prefix('roupas')->group(function (){
   Route::get('/lista', 'roupasController@index')->name('listaRoupas');
   Route::get('/cadastra', 'roupasController@create')->name('cadastraRoupas');
   Route::get('/edita', 'roupasController@edita')->name('editaRoupas');
});

Route::prefix('fornecedor')->group(function (){
   Route::get('/lista', 'fornecedorController@index')->name('listaFornecedor');
   Route::get('/cadastra', 'fornecedorController@create')->name('cadastraFornecedor');
   Route::get('/edita', 'fornecedorController@edita')->name('editaFornecedor');
});
