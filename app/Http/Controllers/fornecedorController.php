<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class fornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedores = Fornecedor::where('publicado', '1')->get();
        return view('fornecedor.lista', compact('fornecedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fornecedor.cadastra');
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
            'nome_fantasia'=>'required',
            'cnpj'=>'required | unique:fornecedores'
        ]);
        Fornecedor::create([
            'nome' => $request->nome,
            'nome_fantasia' => $request->nome_fantasia,
            'cnpj' => $request->cnpj,
            'publicado' => 1

        ]);
        $fornecedor->nome = $request->nome;
        $fornecedor->nome_fantasia = $request->nome_fantasia;
        $fornecedor->cnpj = $request->cnpj;
        $fornecedor->publicado = 1;
        $fornecedor->save();
        return redirect()->route('listaFornecedor')->with('Alerta', 'Fornecedor cadastrado com sucesso.');
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
        $fornecedor = Fornecedor::find($id);
       return view('fornecedor.cadastra', compact( 'fornecedor'));
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
        $fornecedores = Fornecedor::find($id);
        $fornecedores->nome = $request->nome;
        $fornecedores->nome_fantasia = $request->nome_fantasia;
        $fornecedores->cnpj = $request->cnpj;
        $fornecedores->save();

        return redirect()->route('listaFornecedor')->with('Alerta', 'Fornecedor alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fornecedor = Fornecedor::find($id);
        $fornecedor->publicado = 0;
        $fornecedor->save();
        return redirect()->route('listaFornecedor')->with('Alerta', 'Fornecedor excluido com suucesso');
    }
}
