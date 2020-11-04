<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = [
            'Jorge',
            'Angel',
            'Aleix',
            'Marc',
        ];
        $tittle = "Listado de usuarios";
        //dd(compact('tittle', 'users'));
        return view('users', compact('tittle', 'users'));
    }
    public function show($id) {
        return "Mostrando detalle del usuario: {$id}";
    }
    public function create() {
        return "Crear nuevo usuario:";
    }
}  
