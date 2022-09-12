<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\TestNotification;
use Notification;

class TestNotificationController extends Controller
{
    function sendNotification()
    {
        $user = User::first();
        // return $user;
        $testData = [
            'body' =>'You recived a new test notification',
            'testText'=>'You are able to enroll',
            'url'=>url('/'),
            'thankyou'=>'you have 10 days to enrol'
        ];
    //    $user->notify(new TestNotification($testData));
    Notification::send($user, new TestNotification($testData));
       
    }
}
