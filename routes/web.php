<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IdeesController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(IdeesController::class)->group(function(){

    Route::get('ajouter_idee','create');
    Route::post('ajouter_idee','store');
    Route::get('affiche_idee','index');



    Route::middleware()->group(function(){
    
    Route::get('supprimer/{id}','destroy');
    Route::get('detail_idee/{id}','show');
    Route::post('detail_idee/save_commentaire','save_commentaire');
    Route::get('modifier_idee/{id}','edit');
    Route::post('modifier_idee/{id}','update');
});

});



Route::controller(AuthController::class)->group(function(){

    Route::get('login','login');
    Route::post('authentification','authentification');
    Route::post('logout','logout');
    Route::get('register','register');
    Route::post('save_register','save_register');

});

    // Envoie d'email
Route::controller(MailController::class)->group(function(){

    Route::get('test','index');
    Route::get('/approuve','approuve');
    Route::post('/approuve','approuve');
    Route::get('/refuse','refuse');
    Route::post('/refuse','rufuse');
});



