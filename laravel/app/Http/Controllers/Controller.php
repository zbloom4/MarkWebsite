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
        $name = $_POST["name"];
        $email = $_POST["email"];
        $content = $_POST["message"];
        $action = $_POST["action"];
        if ($action == "resume"){
            move_uploaded_file($_FILES["resume"]['tmp_name'],public_path('img/resume.pdf'));
        }
        $data = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Message: " . $content;
        Mail::raw($data, function ($message) {
            $action = $_POST["action"];
            $message->from('team@communityintegrationnetwork.org', 'Your Website');
            if ($action == "resume"){
                $name = $_POST['name'];
                $message->from('team@communityintegrationnetwork.org', 'Your Website');
                $message->to('bballruler@gmail.com')->subject('Potential Employee Resume!');
                $message->attach(public_path('img/resume.pdf'));
            }
            else{
                $subject = $_POST["subject"];
                $message->to('bballruler@gmail.com')->subject($subject);

            }

        });
        return Redirect::to('/');
    }
}
