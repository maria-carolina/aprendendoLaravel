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
        $roupas = Roupa::all();
        return view('roupas.lista', compact('roupas'));



        /*@if(count($roupas)>0)
    <div class="row">
        <div class="col-md-3">
    @foreach($roupas as $roupa)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$roupa->nome}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$roupa->categoria}}</h6>
                    <a href="#" class="card-link">Remover</a>
                    <a href="#" class="card-link">Visualizar</a>
                </div>
            </div>
    @endforeach
        </div>
    </div>
    @else
    <div class="alert alert-success" role="alert">Não há roupas cadastradas</div>
    @endif*/
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
        return view('roupas.visualiza');
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
