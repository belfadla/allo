<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyMail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    //
    public function send(Request $request)
    {

        Mail::send('email',
        array(
            'name' => $request->name,
            'telephone' =>  $request->telephone,
            'sujet' =>  $request->sujet,
            'email' =>  $request->email,
            'msg' =>  $request->message
        ), function($message) use ($request)
    {
        
        $message->to('info@allotapiseljadida.com','Allo Tapis ElJadida')->replyTo($request->email)
        ->subject($request->sujet);
    });
    Alert::success('Success', 'Merci De Nous Contacter!!!');

    return redirect()->back(); 
    }
}
