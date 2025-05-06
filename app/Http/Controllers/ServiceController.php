<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('Backend.Services.index', compact('services'));
    }

    public function create()
    {
        return view('Backend.Services.create');
    }

    public function store(Request $request)
    {
        // সার্ভিস নামটি প্রথমে চেক করো
        $existingService = Service::where('service_name', $request->service_name)->exists();

        // যদি সার্ভিস নাম আগে থেকেই থাকে
        if ($existingService) {
            return back()->withErrors(['service_name' => 'This Service name is Already Exists !!'])->withInput();
        }

        // যদি না থাকে, তখন ডাটা ইনসার্ট করো
        Service::create([
            'service_name' => $request->service_name,
        ]);

        return back()->with('success', 'Service added successfully!');
    }

    public function edit(Service $service)
    {
        
        return view('Backend.Services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'service_name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('services')->ignore($service->id),
            ],
        ], [
            'service_name.unique' => 'Service Name Already Exists! Try Another.',
        ]);

        $service->update($request->only('service_name'));

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }


    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }

    public function __construct()
    {
        $this->middleware('auth'); // ইউজার লগিন চেক
        $this->middleware('is_admin'); // ইউজারের রোল চেক
    }
}
