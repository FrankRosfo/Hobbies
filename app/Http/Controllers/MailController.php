<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Mail;

class MailController extends Controller
{
    public function getMail(Request $datos){
        $Nombre = $datos -> name;
        $Mensaje = $datos -> message;
        $Correo = $datos -> subjet;
        $Nombre = "Frank";
        $Mensaje = "Tienes un correo nuevo";
        $data = ['name' => $Nombre,$Mensaje,$Correo];
        Mail::to('raziel.rosfo.1904@gmail.com')->send(new TestMail($data));
    }
}
