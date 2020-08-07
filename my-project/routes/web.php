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


Route::get('/hola', function () {
    return view('hola');
});

// Route::get("/{user}/{id}",function($user, $id){
//     return "Mi nombre es {$user} y mi id es ${id}";
// });

// Rutas con filtros 

Route::get("/usuarios",function (){
    return "Crear nuevo usuario";
});

Route::get("/usuarios/{id}", function ($id){
    return "Crar usuario numero {$id}";
})->where("id","[0-9]+");

// Rutas con parametros opcionales 
// Route::get("{user}/{id?}", function($user, $id = null) {
//     if ($id) {
//         return "Hola {$user} con id {$id}";
//     }
//     else {
//         return "Bienvenido {$user} sin id"; 
//     }
// });