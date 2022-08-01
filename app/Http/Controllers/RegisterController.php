<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:100',
            'username' => 'required|min:3|max:100',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|unique:users|min:5|max:100',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']) ;

        User::create($validatedData);

        $request->session()->flash('success', 'Registrastion Successfull!');
        
        return redirect('/login');
    }
}
