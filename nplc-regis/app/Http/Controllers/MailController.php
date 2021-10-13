<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\MailModel;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function sendEmail()
    {
        Mail::to('maximusaureliusw@gmail.com')->send(new SendEmail);
        return view('done');
    }
}
