<?php

use App\Http\Controllers\IdeesController;
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
});