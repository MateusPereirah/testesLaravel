<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::redirect('/', '/teste');

Route::view('/teste', 'testerota');

// Exemplo de rota dinamica
// Route::get('/teste/{sfd}', function($slug){
//     echo 'Titulo da noticia:' .$slug;
// });

// Exemplo de rota dinamica com dois parametros
// Route::get('/teste/{id}/olha/{titulo}', function($id, $titulo){
//     echo 'Esse foi o ID: '.$id .'</br>';
//     echo 'Esse foi o titulo: ' .$titulo .'</br>';
// });

