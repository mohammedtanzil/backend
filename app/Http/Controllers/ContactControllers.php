<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;

use Illuminate\Http\Request;

use Mail;

class ContactControllers extends Controller
{
   public function sendemail(Request $request){

        $details=[
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->ctg,
            'comments'=>$request->msg,
            'buget'=>$request->buget,
        ];

        Mail::to('itanzil73@gmail.com')->send(new ContactMail($details));
        if (Mail::failures()) {
            return' response showing failed emails';
        }
        return' done';

   }
}
