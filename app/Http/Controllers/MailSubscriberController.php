<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use Illuminate\Http\Request;

class MailSubscriberController extends Controller
{
    public function __invoke(Request $request)
    {
        $mail = new \App\Mail\UserSubscribed($request->input('mail'));
        SendEmail::dispatch($mail)->onQueue('emails');
    }
}
