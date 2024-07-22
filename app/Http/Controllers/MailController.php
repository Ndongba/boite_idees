<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use App\Models\Idees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'titre' => 'Mail from Boite à idées',
            'contenu' => 'Ceci est un email de test utilisant SMTP',
        ];

        Mail::to('ndongba01@gmail.com')->send(new TestEmail($mailData));

        dd('Email envoyé avec succès.');
    }

    public function approuve($id)
    {
        $idee = Idees::find($id);

        if ($idee) {
            $idee->status = 'approuve';
            $idee->save();

            $mailData = [
                'titre' => 'Mail from Boite à idées',
                'contenu' => 'Bonjour, nous sommes ravis de vous annoncer que votre idée a été approuvée',
            ];

            Mail::to($idee->user->email)->send(new TestEmail($mailData)); // Utiliser l'email de l'utilisateur
        } else {
            return redirect()->back()->withErrors(['error' => 'Idée non trouvée']);
        }
    }

    public function refuse($id)
    {
        $idee = Idees::find($id);

        if ($idee) {
            $mailData = [
                'titre' => 'Mail from Boite à idées',
                'contenu' => 'Nous sommes désolés de vous annoncer que votre idée n\'a pas été approuvée',
            ];

            Mail::to($idee->user->email)->send(new TestEmail($mailData)); // Utiliser l'email de l'utilisateur
        } else {
            return redirect()->back()->withErrors(['error' => 'Idée non trouvée']);
        }
    }
}
