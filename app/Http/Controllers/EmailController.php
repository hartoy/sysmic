<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, que será la encargada del envío

class EmailController extends Controller
{

    public function contact(Request $request){
        $subject = "SYSMIC CONSULTA";
        $for = "ighardoy@gmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("tucorreo@gmail.com");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}
