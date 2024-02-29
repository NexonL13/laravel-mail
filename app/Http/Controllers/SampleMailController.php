<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SampleMail;

class SampleMailController extends Controller
{

    public function index()
    {
        $subject = 'Sample subject';
        $body = 'This is a sample body';
        Mail::to('user@gmail.com')->send(new SampleMail($subject, $body));
    }
}
