<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {

        return view('auth.register');
    }

    public function store(Request $request, $role) {

        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'image_url' => 'required|image'
        ]);

        $attributes = array_merge($attributes, [
            'image_url' => $attributes['image_url']->store('uploads')
        ]);

        $attributes = array_merge($attributes, compact('role'));

        User::create($attributes);

        return redirect()->route('home');
    }
}
