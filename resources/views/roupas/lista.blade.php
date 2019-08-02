@extends('main.index')

@section('conteudo')

@if(session('Alerta'))
    <div class="alert alert-success" role="alert">
        {{session('Alerta')}}
    </div>
@endif

@if(count($roupas)>0)
    <div class="row">
        @foreach($roupas as $roupa)
            <div class="col-md-3">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$roupa->nome}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">'Categoria'</h6>
                        <img src="http://imagensemoldes.com.br/wp-content/uploads/2018/03/Mockup-Camiseta-Rosa-Edit%C3%A1vel-300x294.png" width="100" align="center">
                        <br/>
                        <a href="#" class="card-link">Remover</a>
                        <a href="{{route('visualizaRoupas', ['id'=>$roupa->id])}}" class="card-link">Visualizar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="alert alert-success" role="alert">Não há roupas cadastradas</div>
@endif

@endsection