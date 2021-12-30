<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request){
        // $url = $request->url();
        // $method = $request->method();

        // echo "Essa é a url: ".$url ."<br/>";
        // echo "Esse é o metodo: " .$method ."<br/>";
        // echo "Pagina de configurações";

        $dados = $request->all();
        //print_r($dados);
        // $nome = $dados['nome'];
        // $idade = $dados['idade'];

        $nome = $request->input('nome');
        $idade = $request->input('idade');

        // $nome = $request->query('nome', "não informado");
        // $idade = $request->query('idade', "não informado");

        // echo "<br> O nome é: " .$nome ."<br>";
        // echo "A Idade é: " .$idade ."<br>";

        // $nome = $request->only(['nome']);
        // $idade = $request->only(['idade']);

        // echo "<br> O nome é: " .$nome['nome'] ."<br>";
        // echo "A Idade é: " .$idade['idade'] ."<br>";

        // echo "O metodo foi: " .$request->method();

        // $nome = "Mateus";
        // $idade = 119;

        $lista = [
            "ovos",
            "farinha",
            "fermento",
            "leite"
        ];

        $dados = [
            'nome' => $nome,
            'idade' => $idade,
            'lista' => $lista
        ];

        return view('config', $dados);
    }

    public function user(){
        echo "Pagina do usuario";
    }


    //
}
