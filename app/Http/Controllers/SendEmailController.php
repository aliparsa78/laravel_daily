<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use Mail;
 
use App\Mail\NotifyMail;
use App\Models\emaployee;
use Hash;
 
class SendEmailController extends Controller
{
     public function register()
     {
          return "test";
     }
    public function index(Request $req)
    {
     $employe = new emaployee();
     $employe->name = $req->name;
     $employe->lastname = $req->lname;
     $employe->email = $req->email;
     $employe->password = Hash::make($req->password);
     $employe->save();
      Mail::to($req->email)->send(new NotifyMail());
 
      if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
      }else{
           return "email sent success fuly";
         }
    } 
}