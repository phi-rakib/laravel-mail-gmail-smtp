<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail From XYZ Solution',
            'body' => 'This is a test mail.'
        ];

        Mail::to('test@example.com')->send(new TestMail($mailData));

        return 'Email Has been sent successfully';
    }
}
