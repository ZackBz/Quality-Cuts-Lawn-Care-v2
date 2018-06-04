<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Mail\Contact;

class contactController extends Controller
{
    public function contact(Request $r){
      $this->validate($r, [
        "name" => "required",
        "phone" => ["required", "regex:/^\d{3}[- ]?\d{3}[- ]?\d{4}$/"],
        "address" => "required",
        "property" => "required",
        "message" => "required"
      ]);
      Mail::to(env('CONTACT_EMAIL'))->send(new Contact($r->all()));
      Session::flash('Success','Success! Your message has been sent.');
      return back();
    }

    // public function ShowView(){
    //   return view('contact');
    // }
}
