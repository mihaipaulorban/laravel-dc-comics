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


    // Metodo per lo store delle informazioni
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'thumb' => 'nullable|url',
            'price' => 'required|max:255',
            'series' => 'nullable|max:255',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:255',
            'artists' => 'nullable|json',
            'writers' => 'nullable|json'
        ]);

        Comic::create($validatedData);

        return redirect('/')->with('status', 'Fumetto Generato!');
    }

    // Metodo per mandarti al form di update
    public function edit(Comic $comic)
    {
        return view('edit', compact('comic'));
    }

    // Motodo per aggiornare le info di un fumetto
    public function update(Request $request, Comic $comic)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'thumb' => 'nullable|url',
            'price' => 'required|max:255',
            'series' => 'nullable|max:255',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:255',
            'artists' => 'nullable|json',
            'writers' => 'nullable|json'
        ]);

        $comic->update($validatedData);

        return redirect('/')->with('status', 'Comic updated successfully!');
    }
}
