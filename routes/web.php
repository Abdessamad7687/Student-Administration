<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;




Route::get('/', [EtudiantController::class, 'Home']);
    
Route::post('/', [EtudiantController::class, 'Connect'])->name('acceuil');
Route::get('/notes', [EtudiantController::class, 'notes'])->name('notes');

Route::delete('/{id}', [EtudiantController::class, 'destroy'])->name('destroy');

