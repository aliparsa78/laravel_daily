<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Notification;
use App\Notifications\RegisterNotification;

class RegisterNotificationController extends Controller
{
    public function notification()
    {
        $user = User::first();
        $data = [
            'body'=>'You recived a notification from Ali Parsa',
            'text'=>'You have to pay your money befor I call you',
            'url'=>url('/'),
            'thankyou'=>'you have 3 days left',
        ];

        $user->notify(new RegisterNotification($data));
    }
}
