<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContohController;


Route::get('/', function () {
    return view('welcome');


});

Route::get('/tentang',[ContohController::class, "tentang"] )->name("tentang");