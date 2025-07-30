<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required',
            'email'       => 'required|email|unique:users',
            'mobile'      => 'required',
            'department'  => 'required',
            'designation' => 'required',
            'password'    => 'required|min:6',
        ]);

        User::create([
            'name'        => $request->name,
            'email'       => $request->email,
            'mobile'      => $request->mobile,
            'department'  => $request->department,
            'designation' => $request->designation,
            'password'    => Hash::make($request->password),
        ]);

        return redirect()->route('dashboard')->with('success', 'User created successfully.');
    }
}

