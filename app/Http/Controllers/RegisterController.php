<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showForm(){
        return view('register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:15',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
        ]);

        return back()->with('success', 'inscription reussit !');
    }

}
