<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class GoodCode extends Controller
{
    /**
     * Buenas practicas aplicadas:
     * SRP: Single Responsibilty Principle
     * Encapsulamiento:
     * Encapsular la lógica de validar y crear un usuarios en funciones privadas
     * de esta forma nos aseguramos que nadie puede llamar a esas funciones
     * fuera de esta clase.
     */
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
