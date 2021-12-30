
<h1>
    PAGINA DE CONFIGURAÇÕES
</h1>

<h2> Meu nome é {{$nome}} e meu Estado é {{$estado}} </h2>

<form method="POST">
    @csrf

    <lbl for="nome">Nome</lbl><br/>
    <input type="text" name="nome"><br/>

    <lbl for="idade">Idade</lbl><br/>
    <input type="text" name="idade"><br/>
    <br/>
    <input type="submit" value="Enviar">


</form>


<a href="/config/info">INFO</a>
    
<a href="/config/permissoes">PERMISSÕES</a>

Versão: {{$versao}} <br>