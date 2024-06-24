<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MailController extends Controller
{
    public function index()
    {
       $mailData = [
            'titre' => 'Mail from Boite à idées',
            'contenu' => 'Ceci est un email de test usign smtp',
       ];

       Mail::to('ndongba01@gmail.com')->send(new TestEmail($mailData));

       dd('Email envoyé avec succés.');
    }
    public function approuve(){

        $mailData = [
            'titre' => 'Mail from Boite à idées',
            'contenu' => 'Bonjour nous sommes ravis de vous annoncer que votre idée a été approuvée',
       ];

       Mail::to('ndongba01@gmail.com')->send(new TestEmail($mailData));

    }

    public function refuse(){
        $mailData = [
            'titre' => 'Mail from Boite à idées',
            'contenu' => 'Nous sommes désolés de vous annoncer que votre idée n\'a été approuvée ',
       ];

       Mail::to('ndongba01@gmail.com')->send(new TestEmail($mailData));

    }
}
