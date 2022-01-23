<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ErrorCode extends Controller
{
    public function store(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $user->title = $request->input('name');
        $user->description = $request->input('email');
        $user->date = $request->input('password');
        $user->save();

        return response()->json(['user' => $user]);
    }
}

