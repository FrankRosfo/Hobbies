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
        $Correo = $datos -> subject;
        $data = ['name' => $Nombre, 'sms' => $Mensaje, 'email' => $Correo];
        Mail::to('raziel.rosfo.1904@gmail.com')->send(new TestMail($data));
        return redirect('contacto');
    }
}
