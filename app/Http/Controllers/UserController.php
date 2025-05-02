<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', auth()->id())->get();
        return view('Backend.Users.index', compact('users'));
    }

    public function makeAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->role = 'admin';
        $user->save();

        return back()->with('success', 'User promoted to admin');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('Backend.Users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user->update($request->only('name', 'email'));

        return redirect()->route('users.index')->with('success', 'User updated');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('success', 'User deleted');
    }
}
