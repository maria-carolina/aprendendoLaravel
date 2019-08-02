@extends('main.index')

@section('conteudo')

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" class="form-control" name="nome" value="" placeholder="Nome da roupa">
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select class="form-control" name="categoria" id="categoria">
                            <option> </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Fornecedor</label>
                        <select class="form-control" name="fornecedor" id="fornecedor">
                            <option></option>
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
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>

@endsection