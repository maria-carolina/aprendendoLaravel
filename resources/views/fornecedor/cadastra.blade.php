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
            <form method="post" action="{{isset($fornecedor) ? route('salvarFornecedor', ['id'=>$fornecedor->id]) : route('gravarFornecedor')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{isset($fornecedor) ? "$fornecedor->nome" : ""}}" placeholder="Nome Completo">
                </div>
                <div class="form-group">
                    <label>Nome Fantasia</label>
                    <input type="text" class="form-control" name="nome_fantasia" value="{{isset($fornecedor) ? "$fornecedor->nome_fantasia" : ""}}" placeholder="Nome fantasia da empresa">
                </div>
                <div class="form-group">
                    <label>CPNJ</label>
                    <input type="text" class="form-control" name="cnpj" value="{{isset($fornecedor) ? "$fornecedor->cnpj" : ""}}" placeholder="CNPJ">
                </div>
                <a href="#" class="btn btn-outline-dark">Cancelar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>

            </form>
        </div>
    </div>
@endsection