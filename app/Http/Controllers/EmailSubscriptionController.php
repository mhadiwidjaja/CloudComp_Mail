<?php

namespace App\Http\Controllers;

use App\Mail\SubscriptionConfirmation;
use App\Models\EmailSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class EmailSubscriptionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subscribe');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validate the request
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|unique:email_subscriptions,email',
            'password' => 'required|string|min:8|confirmed',
            'birth_date' => 'required|date|before:today',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        // 2. Create the record
        EmailSubscription::create($validated);

        Mail::to($validated['email'])->send(
                new SubscriptionConfirmation(
                    $validated['name'],
                    $validated['email'],
                    $validated['birth_date']
                )
            );

        // 3. Redirect back with a success message
        return back()->with('success', 'Thanks for subscribing, ' . $validated['name'] . '!');
    }
}
