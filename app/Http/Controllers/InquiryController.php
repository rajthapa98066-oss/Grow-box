<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInquiryRequest;
use App\Models\Inquiry;
use App\Models\Service;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function showContactForm()
    {
        $services = Service::where('is_active', true)->get();
        return view('contact', compact('services'));
    }

    public function store(StoreInquiryRequest $request)
    {
        $data = $request->validated();
        Inquiry::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'company' => $data['company'] ?? null,
            'service_id' => $data['service_id'] ?? null,
            'budget' => $data['budget'] ?? null,
            'contact_method' => $data['contact_method'] ?? null,
            'timeline' => $data['timeline'] ?? null,
            'subject' => $data['subject'] ?? null,
            'message' => $data['message'],
            'status' => 'new',
        ]);

        return redirect()->route('contact')->with('success', 'Thank you for contacting Growbox Nepal. Our team will review your inquiry and get back to you shortly.');
    }
}
