<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required',
            'thumb' => 'nullable|url',
            'price' => 'required|numeric',
            'series' => 'nullable|max:255',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:255',
            'artists' => 'nullable|json',
            'writers' => 'nullable|json'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare 255 caratteri.',
            'description.required' => 'La descrizione è obbligatoria.',
            'thumb.url' => 'L\'URL della miniatura deve essere un URL valido.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'price.max' => 'Il prezzo non può superare 255 caratteri.',
            'series.max' => 'La serie non può superare 255 caratteri.',
            'sale_date.date' => 'La data di vendita deve essere una data valida.',
            'type.max' => 'Il tipo non può superare 255 caratteri.',
            'artists.json' => 'Gli artisti devono essere in formato JSON.',
            'writers.json' => 'Gli scrittori devono essere in formato JSON.'
        ];
    }
}
