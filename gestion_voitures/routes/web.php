<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\VoitureController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('proprietaires', 'App\Http\Controllers\ProprietaireController');
Route::resource('voitures', 'App\Http\Controllers\VoitureController');