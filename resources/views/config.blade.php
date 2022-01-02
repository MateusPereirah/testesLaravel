@extends('layouts.admin')
@section('title', 'Formulario')
    
@section('content')
<h1>
    PAGINA DE CONFIGURAÇÕES
</h1>

<h2> Meu nome é {{$nome}} e minha idade é {{$idade}} </h2>

<form method="POST">
    @csrf

    <lbl for="nome">Nome</lbl><br/>
    <input type="text" name="nome"><br/>

    <lbl for="idade">Idade</lbl><br/>
    <input type="text" name="idade"><br/>
    <br/>
    <input type="submit" value="Enviar">
</form>

@if ($idade>18 && $idade<60)
    Eu sou maior de idade
@elseif($idade>60 && $idade<120)
    Eu sou um idoso
@else
    Eu sou menor de idade
@endif

<hr>
{{-- @if(count($lista)>0)
    <ul>
        Lista
        @foreach($lista as $item)
        <li> {{$item}} </li>
        @endforeach
    </ul> 
@else
    Não há lista
@endif --}}

    <ul>
        Lista
        @forelse($lista as $item)
            <li> {{$item}} </li>
        @empty
            Não há lista
        @endforelse
    </ul> 
    <hr>   

<br>

<a href="/config/info">INFO</a>
    
<a href="/config/permissoes">PERMISSÕES</a>

{{-- Versão: {{$versao}} <br> --}}
@endsection