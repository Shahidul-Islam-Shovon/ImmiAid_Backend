<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use App\Models\Service;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = Pricing::with('service')->latest()->get();
        $services = Service::all();
        return view('Backend.Pricing.index', compact('pricings', 'services'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'fees_charged' => 'required|numeric',
            'home_office_fee' => 'required|numeric',
            'work_description' => 'required|string',
            'total' => 'required|numeric',
        ]);

        Pricing::create($validated);

        return redirect()->back()->with('success', 'Pricing added successfully.');
    }

    public function edit($id)
    {
        $pricing = Pricing::findOrFail($id);
        $services = Service::all();
        return view('Backend.Pricing.edit', compact('pricing', 'services'));
    }

    public function update(Request $request, $id)
    {
        $pricing = Pricing::findOrFail($id);

        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'fees_charged' => 'required|numeric',
            'home_office_fee' => 'required|numeric',
            'work_description' => 'string',
            'total' => 'required|numeric',
        ]);

        $pricing->update($validated);

        return redirect()->route('pricing.index')->with('success', 'Pricing updated successfully.');
    }

    public function destroy($id)
    {
        Pricing::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Pricing deleted successfully.');
    }

    public function __construct()
    {
        $this->middleware('auth'); // ইউজার লগিন চেক
        $this->middleware('is_admin'); // ইউজারের রোল চেক
    }
}
