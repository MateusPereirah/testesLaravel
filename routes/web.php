<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::redirect('/', '/teste');

//Route::view('/teste', 'testerota');

// Exemplo de rota dinamica
// Route::get('/teste/{sfd}', function($slug){
//     echo 'Titulo da noticia:' .$slug;
// });

// Exemplo de rota dinamica com dois parametros
// Route::get('/teste/{id}/olha/{titulo}', function($id, $titulo){
//     echo 'Esse foi o ID: '.$id .'</br>';
//     echo 'Esse foi o titulo: ' .$titulo .'</br>';
// });


// Exemplo de rota com name e redirect
// Route::get('/config', function(){
//     return redirect()->route('r-info');
// })->name('config');

Route::get('/config/info', function(){
    echo 'PAGINA DE INFORMAÇÕES';
})->name('r-info');

Route::get('/config/permissoes', function(){
    echo 'PAGINA DE PERMISSÕES';
})->name('r-permissoes');



// Route::prefix('/config')->group(function(){
//     Route::get('/', function(){
//         return view('config');
//     });

//     Route::get('info', function(){
//         echo 'PAGINA DE INFORMÇÃOES 2';
//     });

//     Route::get('permissoes', function(){
//         echo 'PAGINA DE INFORMAÇÕES 2';
//     });
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/config', [ConfigController::class, 'index']);
Route::post('/config', [ConfigController::class, 'index']);
Route::get('/config/user', [ConfigController::class, 'user']);


Route::prefix('/tarefas') ->group(function(){
    Route::get('/', [TarefasController::class, 'index'])->name('tarefas.list'); //listar tarefas

    Route::get('add', [TarefasController::class, 'add'])->name('tarefas.add'); //adicionar tarefas
    Route::post('add', [TarefasController::class, 'addAction']); //ação de adicionar tarefas

    Route::get('edit/{id}', [TarefasController::class, 'edit'])->name('tarefas.edit'); //tela de edição
    Route::post('edit/{id}', [TarefasController::class, 'editAction']); //ação de edição

    Route::get('delete/{id}', [TarefasController::class, 'delete'])->name('tarefas.del'); //ação de exclusão

    Route::get('marcar/{id}', [TarefasController::class, 'done'])->name('tarefas.done'); //marcar como resolvido ou não
});


//Sempre recomendado por o fallback por ultimo
Route::fallback(function(){
    return view('404');
});
