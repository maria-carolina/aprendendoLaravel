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
            <form method="post" action="{{route('gravarCategoria')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Categoria</label>
                    <input type="text" class="form-control" name="nome" id="categoria" placeholder="Insira uma categoria">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection