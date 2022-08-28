<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    function dashboard()
    {
        return view('dashboard');
    }
    function mypayment()
    {   
        $this->authorize('payment',User::class);
        return "yes";
    }
}
