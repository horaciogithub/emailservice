<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSend extends Controller
{
    public function mailSend(Request $request) {

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'messageText' => $request->message,
        ];

        Mail::send('emailView', $data, function($data) {
            $data->from('horacioram94@gmail.com', 'Mensaje enviado desde portafolio');
            $data->to('horacioram94@gmail.com')->subject('HRDeveloper');
        });

        return "success";
    }
}
