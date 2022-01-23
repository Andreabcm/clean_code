<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

/**
     * Malas practicas:
     * Esta clase esta haciendo tareas que no le corresponde:
     * Validar Requests
     * LLamar al modelo para insertar datos en la BD
     *
 */
class ErrorCodeExample extends Controller
{

    public function store(Request $request, User $user)
    {
        // Validar Request
        $validatedData = $this->validarRequest($request);

        // Crear el usuario
        $createdUser = $this->crearUsario($user, $validatedData);

        // Devolver una respuesta JSON
        return response()->json(['user' => $createdUser]);
    }

    private function validarRequest($request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
    }

    private function crearUsario($user, $userData) {
        $user->title = $userData->input('name');
        $user->description = $userData->input('email');
        $user->date = $userData->input('password');
        $user->save();
        return $user;
    }


}
