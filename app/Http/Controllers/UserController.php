<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::all();
        return view('admin.index', ["users"=> $users]);
    }

    public function create(): View
    {
        return view('admin.create');
    }

    public function store(UserRequest $request): RedirectResponse
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => $request->role
        ]);

        return redirect()->route('admin.index')->with('success','Usuario creado');
    }

    public function edit($user): View
    {
        $myUser = User::find($user);
        return view('admin.edit', ["user"=> $myUser]);
    }

    public function update(UserRequest $request, User $user): RedirectResponse
    {
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role
        ]);

        return redirect()->route('admin.index')->with('success', 'Usuario actualizado');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('admin.index')->with('danger', 'Usuario eliminado');
    }
}