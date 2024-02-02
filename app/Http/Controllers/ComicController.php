<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo per l'uso il model Comic per far accedere anche al Controller il DB
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('welcome', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('comic', compact('comic'));
    }
}
