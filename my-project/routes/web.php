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
    // return "Welcome"
});



// Route::get("/{user}/{id}",function($user, $id){
//     return "Mi nombre es {$user} y mi id es ${id}";
// });

// Rutas con filtros 

Route::get("/usuarios","UserController@aplha");

Route::get("/usuarios/{id}","UserController@create")->where("id","[0-9]+");

// Rutas con parametros opcionales 
Route::get("/saludo/{name}/{nickname?}", "UserController@saludo" );