<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class HomeController extends Controller
{
    public function index(){
        //$list = Tarefa::all(); //Da um select * from tarefas
        //$list = Tarefa::where('resolvido', 1)->get(); //query com where
        // $list = Tarefa::find(3); //retorna um unico intem no id especificado
        //$list = Tarefa::find([1,2]); //retorna todos os itens nos id's especificados

        // foreach($list as $item){
        //     echo $item->titulo ."<br>";
        // }

        // // echo $list->titulo;
        // $t = new Tarefa; //para se  inserir um novo valor primeiro deve-se instanciar o model
        // $t->titulo = "fazer compras"; //setar os valor notnull
        // $t->save(); //depois aplicar o comando save no objeto instanciado para ser executado

        // $t = Tarefa::find(11); //para se dar um update com model deve-se instanciar o model com um registro ja existente por meio do comando find por exemplo
        // $t->titulo = "Ler Quadrinhos"; //depois devemos setar os valores que desejamos mudar
        // $t->resolvido = 1; //mudandos quaisquer tributos
        // $t->save(); //depois dar o comando save

        // $t = Tarefa::find(12); //para se excluir mesmo procedimento, priemiro instanciamos um obejto com a linha da tabela
        // $t->delete(); //depois damos o comando delete
       
        // Tarefa::where('resolvido', 0)->update(['resolvido'=>1]); //update em massa, todos os valor que estão com resolvido como 0 vão para 1

        echo "feito!";



       // return view('welcome');
    }
}
