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
            $body = 'This is a sample body';
            Mail::to('user@gmail.com')->send(new SampleMail($subject, $body));
        }
    }
}
