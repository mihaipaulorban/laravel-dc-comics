<?php

use Illuminate\Support\Facades\Route;

// Connetto il mio controller
use App\Http\Controllers\ComicController;

// ROTTE

// Rotta per il controller per Welcome
Route::get('/', [ComicController::class, 'index']);

// Rotta per il metodo Create del controller
Route::get('/comics/create', [ComicController::class, 'create']);


// Rotta per la pagina delle descrizioni
Route::get('/comics/{comic}', [ComicController::class, 'show']);

// Rotta per salvare e procesare il form nel DB
Route::post('/comics', [ComicController::class, 'store']);

// Rotta per modificare il fumetto
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit']);

// Rotta per l'update
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');
