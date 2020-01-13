<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class EmailsController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $receiver = env('MAIL_FROM_ADDRESS');

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        Mail::to($receiver)->send(new Message($name, $email, $message));

        return view('pages.message-sent');
    }
}
