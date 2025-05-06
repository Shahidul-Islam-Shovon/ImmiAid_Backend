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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user', // default role
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function makeAdmin($id)
    {
        $targetUser = User::findOrFail($id);
        $currentUser = auth()->user();

        if (!$currentUser->isSuperAdmin()) {
            return back()->with('error', 'Only Super Admin can change roles.');
        }

        $targetUser->role = 'admin';
        $targetUser->save();

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
        $currentUser = auth()->user();

        if (!$currentUser->isSuperAdmin()) {
            // super admin ছাড়া কেউ অন্য admin/super_admin-এর role change করতে পারবে না
            if ($request->role !== $user->role) {
                return back()->with('error', 'Only Super Admin can change roles.');
            }

            if ($user->isSuperAdmin()) {
                return back()->with('error', 'You cannot update Super Admin.');
            }
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'role' => 'required|in:admin,user',
        ]);

        $user->update($request->only('name', 'email', 'role'));

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }



    public function destroy($id)
    {
        $targetUser = User::findOrFail($id);
        $currentUser = auth()->user();

        if ($targetUser->id == $currentUser->id) {
            return back()->with('error', 'You cannot delete yourself!');
        }

        if (!$currentUser->isSuperAdmin() && $targetUser->role === 'admin') {
            return back()->with('error', 'You are not authorized to delete an admin.');
        }

        if ($targetUser->isSuperAdmin()) {
            return back()->with('error', 'Cannot delete Super Admin.');
        }

        $targetUser->delete();

        return back()->with('success', 'User deleted successfully.');
    }


    public function __construct()
    {
        $this->middleware('auth'); // ইউজার লগিন চেক
        $this->middleware('is_admin'); // ইউজারের রোল চেক
    }
}
