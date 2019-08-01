<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class categoriasController extends Controller
{
    public function index()
    {
        return view('categorias.lista');
    }

    public function create()
    {
        return view('categorias.cadastra');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|unique:categorias'
        ]);
        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->save();

        return redirect()->route('listaCategoria')->with('Alerta', 'Categoria cadastrada com sucesso');
    }
}
