<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tarefa;

class TarefasController extends Controller
{
    public function index(){
        // $list = DB::select('SELECT * FROM tarefas');
        $list = Tarefa::all();
        return view('tarefas.list', [
            'list' => $list
        ]);
    }

    public function add(){
        return view('tarefas.add');
    }

    public function addAction(Request $request){
        $request->validate([
            'titulo' => ['required', 'string']
        ]);    

        $titulo = $request->input('titulo');

        //DB::insert('INSERT INTO tarefas (titulo) VALUES (:titulo)', ['titulo'=>$titulo]);
        $t = new Tarefa;
        $t->titulo = $titulo;
        $t->save();
        return redirect()->route('tarefas.list');   
    }

    public function edit($id){
        //$dados = DB::select('SELECT * FROM tarefas WHERE id = (:id)', ['id' => $id]);
        $dados = Tarefa::find($id);

        if($dados){
            // return view('tarefas.edit', ['data' => $dados]); //Isso retornaria um Array de objetos
            // return view('tarefas.edit', ['data' => $dados[0]->titulo]); //Isso retornaria uma unica informação
            return view('tarefas.edit', ['data'=>$dados]); //Essa opção retorna um objeto
        }else{
            return redirect()->route('tarefas.list'); 
        }
    }

    public function editAction(Request $request, $id){
        $request->validate([
            'titulo' => ['required', 'string']
        ]); 

            $titulo = $request->input('titulo');
            //$data = DB::select('SELECT * FROM tarefas WHERE id = :id', ['id'=>$id]);

            //DB::update('UPDATE tarefas SET titulo = :titulo WHERE id = :id', ['titulo'=>$titulo, 'id'=>$id]);
            Tarefa::where('id', $id)->update(['titulo' => $titulo]);
            return redirect()->route('tarefas.list');
    }

    public function delete($id){
        //DB::delete('DELETE FROM tarefas WHERE id = :id', ['id'=>$id]);
        $t = Tarefa::find($id);
        $t->delete();
        return redirect()->route('tarefas.list');
    }

    public function done($id){
        //$busca = DB::select('SELECT * FROM tarefas WHERE id = :id', ['id'=>$id]);
        $busca = Tarefa::find($id);

        if($busca){
            if($busca->resolvido==0){
                //DB::update('UPDATE tarefas SET resolvido = 1 WHERE id = :id', ['id'=>$id]);
                Tarefa::find($id)->update(['resolvido'=>1]);
            }else{
                //DB::update('UPDATE tarefas SET resolvido = 0 WHERE id = :id', ['id'=>$id]);
                Tarefa::find($id)->update(['resolvido'=>0]);
            }
            return redirect()->route('tarefas.list');
        }else{
            return redirect()->route('tarefas.list');
        }

        
    }
}
