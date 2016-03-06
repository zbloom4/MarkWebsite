<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendEmailReminder()
    {
        Mail::raw('Text to e-mail', function ($message) {
            $message->from('team@communityintegrationnetwork.org', 'Your Website');

            $message->to('bballruler@gmail.com')->subject('Potential Employee Resume!');

//            $message->attach(secure_asset('/img/community.png'));

        });
        return Redirect::to('/');
    }
}
