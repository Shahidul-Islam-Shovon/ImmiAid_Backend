<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;


class EnquiryController extends Controller
{
    public function index(){
        $all_enquiries = Enquiry::latest()->get();
        $total = $all_enquiries->count();
        $read = $all_enquiries->where('is_read', true)->count();
        $unread = $total - $read;

        return view('Backend.Enquiry.index', compact('all_enquiries', 'total', 'read', 'unread'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string'
        ]);

        Enquiry::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->to(url()->previous() . '#form-section')->with('success', 'Your enquiry has been submitted!');
    }

    public function enq_index()
    {
        $all_enquiries = Enquiry::latest()->get();
        $total = $all_enquiries->count();
        $read = $all_enquiries->where('is_read', true)->count();
        $unread = $total - $read;

        return view('Backend.Enquiry.index', compact('all_enquiries', 'total', 'read', 'unread'));
        
    }

    public function markAsRead($id)
    {
        $inq = Enquiry::findOrFail($id);
        $inq->is_read = true;
        $inq->save();

        return redirect('/inquiries')->with('success', 'Inquiry marked as read.');
    }   
}
