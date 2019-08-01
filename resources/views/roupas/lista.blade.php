@extends('main.index')

@section('conteudo')

@if(session('Alerta'))
    <div class="alert alert-success" role="alert">
        {{session('Alerta')}}
    </div>
@endif

@endsection