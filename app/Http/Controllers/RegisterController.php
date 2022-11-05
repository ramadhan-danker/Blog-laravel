<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        $validateData =  $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = \Illuminate\Support\Facades\Hash::make($validateData['password']);

        // $validateData['password'] = bcrypt($validateData['password']);

        \App\Models\User::create($validateData);
        $request->session()->flash('success', 'Registration successfull! Please login');
        return redirect('/login');
    }
}
