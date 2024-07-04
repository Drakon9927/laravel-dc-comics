<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

Route::get('/', function () {
    $dati = config("data");
    return view('home', $dati);
})->name("home");

Route::resource('comics', ComicController::class);