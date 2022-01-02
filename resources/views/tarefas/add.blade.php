@extends('layouts.admin')
@section('title', 'Adição de tarefas')
    
@section('content')
    <h1>Adição de tarefas</h1>

    @if($errors->any())
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
    @endif

    <form method="POST">
        @csrf
        <label>
            Titulo: 
            <input type="text" name="titulo">
        </label>
        <input type="submit" value="Adicionar">
    </form>

@endsection