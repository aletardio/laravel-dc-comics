<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:50|min:3',
            'thumb' => 'max:255',
            'price' => 'required|max:10|min:3',
            'series' => 'required|max:50|min:3',
            'sale_date' => 'required|max:10|min:8',
            'type' => 'required|max:20|min:8',
            'artists' => 'required|max:50|min:3',
            'writers' => 'required|max:50|min:3',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo deve essere al massimo di 50 caratteri',
            'title.min' => 'Il titolo deve essere al minimo di 3 caratteri',
            'thumb.max' => 'Il link all\'immagine deve essere al massimo di 255 caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'price.required' => "Il prezzo è obbligatorio",
            'price.max' => 'I numeri devono essere al massimo di 10 cifre',
            'price.min' => 'I numeri devono essere al minimo di 3 cifre',
            'series.required' => 'La serie è obbligatoria',
            'series.max' => 'La serie deve essere al massimo di 50 caratteri',
            'series.min' => 'La serie deve essere al minimo di 3 caratteri',
            'sale_date.required' => 'La data di uscita è obbligatoria',
            'sale_date.max' => 'La data di uscita deve essere al massimo di 10 caratteri',
            'sale_date.min' => 'La data di uscita deve essere al minimo di 8 caratteri',
            'type.required' => 'La serie è obbligatoria',
            'type.max' => 'La serie deve essere al massimo 20 caratteri',
            'type.min' => 'La serie deve essere al minimo 8 caratteri',
            'artists.required' => 'Devi inserire almeno un artista',
            'artists.max' => 'L\'artista deve essere al massimo di 50 caratteri',
            'artists.min' => 'L\'artista deve essere al minimo di 3 caratteri',
            'writers.required' => 'Devi inserire almeno uno scrittore',
            'writers.max' => 'L\'autore deve essere al massimo di 50 caratteri',
            'writers.min' => 'L\'autore deve essere al minimo di 3 caratteri'
        ];
    }
}
