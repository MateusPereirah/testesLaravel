@extends('layouts.admin')
@section('title', 'Listagem de tarefas')
    
@section('content')
    <h1>Listagem de tarefas</h1>

    <a href="{{route('tarefas.add')}}">Adicionar nova tarefa</a>

    @if(session('warning'))
    <br>
        {{session('warning')}}
    <br>
    @endif

    @if(count($list) > 0)
        @foreach($list as $item)
        <ul>
            <li>
               <a href="{{route('tarefas.done', ['id'=>$item->id])}}"> [@if($item->resolvido === 0) Marcar @else Desmarcar @endif]</a>
                {{$item->titulo}}
                <a href="{{route('tarefas.edit', ['id'=>$item->id])}}">[Editar]</a>
                <a href="{{route('tarefas.del', ['id'=>$item->id])}}" onclick="return confirm('Deseja realmente excluir o item?')">[Excluir]</a>
            </li>
        </ul>
        @endforeach
    @else
        Não há itens
    @endif

@endsection