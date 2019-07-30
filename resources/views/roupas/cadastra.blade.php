@extends('main.index')

@section('conteudo')

    <div class="row justify-content-md-center mt-5">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome da roupa">
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
                        <option> </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Quantidade em estoque">
                </div>
                <a href="#" class="btn btn-outline-dark">Cancelar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>

@endsection