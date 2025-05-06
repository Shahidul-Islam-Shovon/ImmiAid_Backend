<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    public function index()
    {
        $logos = Logo::all();
        return view('Backend.Logo.logo', compact('logos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg,svg,gif,webp|max:5048',
        ]);

        $path = $request->file('image')->store('logos', 'public');

        Logo::query()->update(['status' => 0]); // inactive all first

        Logo::create([
            'image' => $path,
            'status' => 1
        ]); 

        return back()->with('success', 'Logo uploaded successfully!');
    }

    //make active 
    public function makeActive($id)
    {
        // সবগুলো logo ইনএকটিভ করে দাও
        Logo::query()->update(['status' => 0]);

        // শুধু যেটা সিলেক্ট হয়েছে সেটা একটিভ করো
        $logo = Logo::findOrFail($id);
        $logo->status = 1;
        $logo->save();

        return back()->with('success', 'Logo marked as active.');
    }

    public function edit($id)
    {
        $logo = Logo::findOrFail($id);
        return view('Backend.Logo.edit', compact('logo'));
    }

    public function update(Request $request, $id)
    {
        $logo = Logo::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg,gif,webp|max:5048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old
            if ($logo->image && Storage::disk('public')->exists($logo->image)) {
                Storage::disk('public')->delete($logo->image);
            }
            $path = $request->file('image')->store('logos', 'public');
            $logo->update(['image' => $path]);
        }

        return redirect()->route('logo.index')->with('success', 'Logo updated!');
    }

    public function destroy($id)
    {
        $logo = Logo::findOrFail($id);
        if ($logo->image && Storage::disk('public')->exists($logo->image)) {
            Storage::disk('public')->delete($logo->image);
        }
        $logo->delete();

        return back()->with('success', 'Logo deleted successfully!');
    }

    public function __construct()
    {
        $this->middleware('auth'); // ইউজার লগিন চেক
        $this->middleware('is_admin'); // ইউজারের রোল চেক
    }
}
