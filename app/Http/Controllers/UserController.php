<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'ompany' => 'required',
        ]);

        return User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
            'phone' => request('phone'),
            'ompany' => request('ompany'),
        ]);
    }

    public function update(User $user)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'ompany' => 'required',
        ]);

        $success = $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
            'phone' => request('phone'),
            'ompany' => request('ompany'),
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(User $user)
    {
        $success = $user->delete();

        return [
            'success' => $success
        ];
    }
    public function getUser($id)
    {
        $user = User::find($id);
        return $user;
    }  
}