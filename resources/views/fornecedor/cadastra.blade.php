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
            <form method="post" action="{{route('gravarFornecedor')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{old('nome')}}" placeholder="Nome Completo">
                </div>
                <div class="form-group">
                    <label>Nome Fantasia</label>
                    <input type="text" class="form-control" name="nome_fantasia" value="{{old('nome_fantasia')}}" placeholder="Nome fantasia da empresa">
                </div>
                <div class="form-group">
                    <label>CPNJ</label>
                    <input type="text" class="form-control" name="cnpj" value="{{old('cnpj')}}" placeholder="CNPJ">
                </div>
                <a href="#" class="btn btn-outline-dark">Cancelar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection