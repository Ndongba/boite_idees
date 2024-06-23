<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IdeesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(IdeesController::class)->group(function(){

    Route::get('ajouter_idee','create');
    Route::post('ajouter_idee','store');
    Route::get('affiche_idee','index');
    Route::get('supprimer/{id}','destroy');
    Route::get('detail_idee/{id}','show');
    Route::post('detail_idee/save_commentaire','save_commentaire');
    Route::get('modifier_idee/{id}','edit');
    Route::post('modifier_idee/{id}','update');

});



Route::controller(AuthController::class)->group(function(){

    Route::get('login','login');
    Route::post('authentification','authentification');
    Route::post('logout','logout');
    Route::get('register','register');
    Route::post('save_register','save_register');

});