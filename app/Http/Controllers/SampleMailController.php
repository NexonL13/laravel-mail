<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SampleMail;

class SampleMailController extends Controller
{

    public function index()
    {
        //Sending multiple emails
        for ($x = 0; $x <= 4; $x++) {
            $subject = "Sample subject {$x}";
            $body = 'This is your account credentials. Please do not share it with anyone.';
            $username= 'Nexon123';
            $password= 'fD67HjzX';
            Mail::to('user@gmail.com')->send(new SampleMail($subject, $body, $username, $password));
        }
    }
}
