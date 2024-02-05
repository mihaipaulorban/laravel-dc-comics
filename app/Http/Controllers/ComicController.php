<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo il ComicRequest
use App\Http\Requests\ComicRequest;

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
    public function store(ComicRequest $request)
    {
        $validatedData = $request->validated();

        Comic::create($validatedData);

        return redirect('/')->with('status', 'Fumetto Generato!');
    }

    // Metodo per mandarti al form di update
    public function edit(Comic $comic)
    {
        return view('edit', compact('comic'));
    }

    // Metodo per aggiornare le info di un fumetto
    public function update(ComicRequest $request, Comic $comic)
    {
        $validatedData = $request->validated();

        $comic->update($validatedData);

        return redirect('/')->with('status', 'Fumetto aggiornato con successo!');
    }

    // Metodo per eliminare un fumetto
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect('/')->with('status', 'Comic deleted successfully!');
    }
}
