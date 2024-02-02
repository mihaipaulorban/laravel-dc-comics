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

    // Metodo per mostrare i dettagli
    public function show(Comic $comic)
    {
        return view('comic', compact('comic'));
    }

    // Metodo per creare un nuovo fumetto
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $comic = new Comic();
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = json_decode($request->artists);
        $comic->writers = json_decode($request->writers);

        $comic->save();

        return redirect('/')->with('status', 'Comic added successfully!');
    }
}
