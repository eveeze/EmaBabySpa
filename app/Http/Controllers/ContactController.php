<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Mail::to('titozakisaputro.work@gmail.com')->send(new ContactFormMail($data['name'], $data['email'], $data['message']));

    session()->flash('success', 'Pesan Anda berhasil dikirim!');

    return redirect()->back(); 
}
}
