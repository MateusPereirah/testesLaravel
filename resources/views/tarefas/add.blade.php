@extends('layouts.admin')
@section('title', 'Adição de tarefas')
    
@section('content')
    <h1>Adição de tarefas</h1>

    <form method="POST">
        @csrf
        <label>
            Titulo: 
            <input type="text" name="titulo">
        </label>
        <input type="submit" value="Adicionar">
    </form>

@endsection