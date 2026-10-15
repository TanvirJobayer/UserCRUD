<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $user = new User();
        $user->user_name = request('user_name');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->roll = request('roll');
        $user->password = request('password');
        $user->save();

        return redirect('/users');
    }

    public function show($user_id)
    {
        $user = User::findorFail($user_id);
        return view('users.show', compact('user'));
    }

    public function edit($user_id)
    {
        $user = User::findorFail($user_id);
        return view('users.edit', compact('user'));

    }

    public function update($user_id)
    {
        $user = User::findorFail($user_id);
        $user->user_name = request('user_name');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->roll = request('roll');
        $user->password = request('password');
        $user->save();
        return redirect("/users/{$user->user_id}");
    }

    public function destroy($user_id)
    {
        $user = User::findorFail($user_id);
        $user->delete();
        return redirect('/users');
    }
}
