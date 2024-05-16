<?php

use App\Http\Controllers\WellcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
                 #provid   
    return view('welcome');
});

Route::get('/wellcome', [WellcomeController::class,'wellcome']);
