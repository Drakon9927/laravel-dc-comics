<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController;

Route::get('/', function () {
    $dati = config("data");
    return view('home', $dati);
})->name("home");

Route::resource('comics', ComicsController::class);
Route::get('/comics/create', [ComicsController::class, 'create'])->name('comics.create');
Route::post('/comics', [ComicsController::class, 'store'])->name('comics.store');
Route::delete('/comics/{id}', [ComicsController::class, 'destroy'])->name('comics.destroy');