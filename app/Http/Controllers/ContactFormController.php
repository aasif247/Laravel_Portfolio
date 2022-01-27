<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store()
    {
        $contact_form_data = request()->all();
        Mail::to('aasif0430@gmail.com')->send(new ContactFormMail($contact_form_data));

        return redirect()->route('index','/#contact')->with('success','Thanks for contacting us!');
    }
}
