<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;
use Mail;
use App\Mail\ContactMail;


class ContactMailController extends Controller
{


    public function index()
    {
        return view('contact.contact_form');
    }

    public function store(Request $request)
    {


        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        ContactUS::create($request->all());

        Mail::send('contact.email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('tsovinar.nemesida.grigoryan@gmail.com');
                $message->to('tsovinar.nemesida.grigoryan@gmail.com', 'Admin')->subject('Contact Us');
            });
        return back()->with('success', 'Thanks for contacting us!');
    }
}



