<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminProfileController extends Controller
{
    public function index(){
        return view('Backend.Profile.index');
    }

    public function edit()
    {
        return view('Backend.Profile.edit', [
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|confirmed|min:6',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        // Only update password if filled
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Role won't be touched
        $user->save();

        return back()->with('success', 'Profile updated successfully.');
    }
}
