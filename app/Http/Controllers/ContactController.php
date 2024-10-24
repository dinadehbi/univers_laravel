<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function create(){
        return view('contact') ;
    }

    public function store(request $request){
        //valider les données 
        $data = $request ->validate([
            "name" => 'required' ,
            "email" => 'required|email',
            "msg" => 'required' ,
        ]);

        //envoi de l'email
        Mail::raw('test', function ($message){
            $message->to('dinadh012@gmail.com')
                    ->subject('Nouveau message de contact');
        });
        

        // Rediriger après l'envoi
        return redirect('/contact')->with('success', 'Votre message a bien été envoyé.');
    }
}