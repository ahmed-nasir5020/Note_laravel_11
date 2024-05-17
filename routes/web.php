<?php

use App\Http\Controllers\WellcomeController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
                 #provid   
    return view('welcome');
});

Route::get('/wellcome', [WellcomeController::class,'wellcome'])->name('wellcome');

Route::resource('note', NoteController::class);

// Route::get('/note', [NoteController::class,'index'])->name('note.index');
// Route::get('/note/create', [NoteController::class,'create'])->name('note.create');
// Route::post('/note', [NoteController::class,'store'])->name('note.store');
// Route::get('/note/{id}', [NoteController::class,'show'])->name('note.show');
// Route::get('/note/{id}/edit', [NoteController::class,'edit'])->name('note.edit');
// Route::put('/note/{id}', [NoteController::class,'update'])->name('note.update');
// Route::delete('/note/{id}', [NoteController::class,'destroy'])->name('note.destroy');


