<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MutuelleController;

Route::get('/', [MutuelleController::class, 'home'])->name('home');
Route::get('/activites', [MutuelleController::class, 'activites'])->name('activites');
Route::get('/partenaires', [MutuelleController::class, 'partenaires'])->name('partenaires');
Route::get('/formulaire', [MutuelleController::class, 'formulaire'])->name('formulaire');
Route::post('/formulaire', [MutuelleController::class, 'soumettre'])->name('formulaire.soumettre');
Route::get('/confirmation', [MutuelleController::class, 'confirmation'])->name('confirmation');
