<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store incoming project inquiry or cost estimation request.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'service' => 'nullable|string|max:255',
            'budget'  => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        // In production Laravel setup, you would log, send Mail notification, or persist to DB:
        // Mail::to('contact@prowave.tech')->send(new InquiryMail($validated));

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'status'  => 'success',
                'message' => 'Thank you ' . $validated['name'] . '! Your inquiry has been submitted. Our Lead Architect will reach out shortly.',
                'data'    => $validated
            ]);
        }

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
