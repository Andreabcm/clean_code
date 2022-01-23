<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ErrorCode extends Controller
{
    /**
     * Malas practicas
     * Una funcíon que se encarga de varias tareas diferentes
     */
    public function store(Request $request, User $user)
    {
        // Validar Request
        $validatedData = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        // Crear el usuario
        $user->title = $request->input('name');
        $user->description = $request->input('email');
        $user->date = $request->input('password');
        $user->save();

        // Devolver una respuesta JSON
        return response()->json(['user' => $user]);
    }
}
