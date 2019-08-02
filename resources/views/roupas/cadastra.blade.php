@extends('main.index')

@section('conteudo')

    <div class="row justify-content-md-center mt-5">
        <div class="col-md-6">
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{route('gravarRoupas')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" name="nome" value="" placeholder="Nome da roupa">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria" id="categoria">
                        <option> </option>
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor" id="fornecedor">
                        <option></option>
                        @foreach($fornecedores as $fornecedor)
                            <option value="{{$fornecedor->id}}">{{$fornecedor->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Quantidade em estoque">
                </div>
                <div class="form-group">
                    <label>Tamanho</label>
                    <select class="form-control" name="tamanho" id="tamanho">
                        <option></option>
                        @foreach($tamanhos as $tamanho)
                            <option value="{{$tamanho->id}}">{{$tamanho->tamanho}}</option>
                        @endforeach
                    </select>
                </div>
                <a href="#" class="btn btn-outline-dark">Cancelar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>

@endsection