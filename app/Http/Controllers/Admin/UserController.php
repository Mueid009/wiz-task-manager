<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
{
    return view('admin.create-user');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required|email|unique:user_details,email',
        'designation' => 'required',
        'department' => 'required',
        'password' => 'required|min:6',
    ]);

    UserDetail::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'designation' => $request->designation,
        'department' => $request->department,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->back()->with('success', 'User created successfully!');
}
}
