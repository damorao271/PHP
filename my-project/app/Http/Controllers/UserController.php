<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function aplha()
    {

        if (request()->has("empty")) {
            $users = [];
        } else {
            $users = [
                "Adan", "Eva", "Cain", "Abel",
                '<script>alert("Robao")</script>'
            ];
        }

        $titulo = "Lista de Usuarios";
        $contenido = "Contenido";

        // dd(compact("titulo","users"));
        // return view("users",["users" => $users, "titulo => $titulo]);
        return view("users", compact("titulo", "users", "contenido"));
    }

    public function create($id)
    {
        $id = $id;
        // return "Crear usuario numero {$id}";
        return view("usuariosId", compact("id"));
    }

    public function saludo($saludo, $nickname = null)
    {
        if ($nickname) {
            return "Hola {$saludo} con id {$nickname}";
        } else {
            return "Bienvenido {$saludo} sin id";
        }
    }
}
