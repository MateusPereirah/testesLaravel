<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\HomeController;

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

// Route::get('/config/info', function(){
//     echo 'PAGINA DE INFORMAÇÕES';
// })->name('r-info');

// Route::get('/config/permissoes', function(){
//     echo 'PAGINA DE PERMISSÕES';
// })->name('r-permissoes');



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
Route::get('/config/user', [ConfigController::class, 'user']);


//Sempre recomendado por o fallback por ultimo
Route::fallback(function(){
    return view('404');
});
