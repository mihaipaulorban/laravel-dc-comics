<?php

use Illuminate\Support\Facades\Route;

// Connetto il mio controller
use App\Http\Controllers\ComicController;

// ROTTE

// Rotta per il controller per Welcome
Route::get('/', [ComicController::class, 'index']);

// Rotta per la pagina delle descrizioni
Route::get('/comics/{comic}', [ComicController::class, 'show']);
