<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendEmailReminder()
    {
        $data = 'Hi!';
        Mail::send('emails.reminder', $data, function ($message) {
            $message->from('hello@app.com', 'Your Application');

            $message->to('bballruler@gmail.com', 'Zach')->subject('Your Reminder!');
        });
    }
}
