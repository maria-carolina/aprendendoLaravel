@extends('main.index')

@section('conteudo')
    @if(session('Alerta'))
        <div class="alert alert-success" role="alert">
            {{session('Alerta')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Nome da empresa</th>
            <th scope="col">Operações</th>
        </tr>
        </thead>
        <tbody>
            @if(count($fornecedores)>0)
                @foreach($fornecedores as $fornecedor)
                    <tr>
                        <td>{{$fornecedor->nome}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('editaFornecedor', ['id'=>$fornecedor->id])}}" class="btn btn-primary">Editar</a>
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="2" class="text-center">Não há fornecedores cadastrados <a href="{{route('cadastraFornecedor')}}" class="btn btn-success btn-sm">Adicionar fornecedor</a></td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection