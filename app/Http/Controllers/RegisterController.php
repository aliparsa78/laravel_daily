<?php

namespace App\Http\Controllers;
use App\Http\Controllers\SendEmailController\register;

use Illuminate\Http\Request;
use App\Models\emaployee;
use Hash;

class RegisterController extends Controller
{
    function register(Request $req)
    {
        $employe = new emaployee();
        $employe->name = $req->name;
        $employe->lastname = $req->lname;
        $employe->email = $req->email;
        $employe->password = Hash::make($req->password);
        $employe->save();
        $id = $employe->id;
        
    }
    function test($id)
    {
        return "test";
    }
}
