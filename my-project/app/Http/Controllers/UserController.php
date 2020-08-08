<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function aplha() {

        if (request()->has("empty")){
            $users = [];
        }
        else {
            $users = [
                "Adan", "Eva", "Cain", "Abel",
                '<script>alert("Robao")</script>'];
        } 

        $titulo = "Lista de Usuarios";

           // dd(compact("titulo","users"));
            // return view("users",["users" => $users, "titulo => $titulo]);
            return view("users", compact("titulo", "users"));
        }

    public function create($id){
         return "Crear usuario numero {$id}";
    }

    public function saludo($saludo, $nickname = null){
        if ($nickname) {
            return "Hola {$name} con id {$nickname}";
        }
        else {
            return "Bienvenido {$name} sin id"; 
        }
    }
}
