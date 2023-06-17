<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function formcontact()
    {
        $user = Auth::user();
    
        return view('pages.contact.form', [
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }
    public function submitForm(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Get the current user's email
    $userEmail = Auth::user()->email;

    Mail::send(['text' => 'pages.contact.contact'], ['data' => $validatedData], function($message) use ($userEmail) {
        $message->to('azzamokimane20@gmail.com')
                ->from($userEmail)
                ->subject('New Contact Form Submission');
    });

    return response()->json(['message' => 'Email sent successfully']);
}




}
