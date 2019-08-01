<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Fornecedor;
use App\Roupa;
use App\Tamanho;
use Illuminate\Http\Request;

class roupasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('roupas.lista');
    }


    public function edita()
    {
        return view('roupas.edita');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fornecedores = Fornecedor::all();
        $categorias = Categoria::all();
        $tamanhos = Tamanho::all();
        return view('roupas.cadastra', compact('fornecedores', 'categorias', 'tamanhos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome'=>'required',
            'categoria'=>'required',
            'fornecedor'=>'required',
            'quantidade'=>'required',
            'tamanho'=>'required'
        ]);
        $roupas = new Roupa();
        $roupas->nome = $request->nome;
        $roupas->quantidade = $request->quantidade;
        $roupas->categoria_id = $request->categoria;
        $roupas->tamanho_id = $request->tamanho;
        $roupas->fornecedor_id = $request->fornecedor;
        $roupas->save();

        return redirect()->route('listaRoupas')->with('Alerta', 'Cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
