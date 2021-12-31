@extends('layouts.admin')
@section('title', 'Edição de tarefas')
    
@section('content')
    <h1>Edição de tarefas</h1>

    @if($errors->any())
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
    @endif

    <form method="POST">
        @csrf
        <label>
        Titulo:<br>
        <input type="text" name="titulo" value="{{$data->titulo}}">
        </label>

        <input type="submit" value="Atualizar">
    </form>
@endsection