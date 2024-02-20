<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'title' => 'required|max:50|min:3',
        //     'thumb' => 'max:255',
        //     'price' => 'required|max:10',
        //     'series' => 'required|max:50|min:3',
        //     'sale_date' => 'required|max:10|min:8',
        //     'type' => 'required|max:20',
        //     'artists' => 'required',
        //     'writers' => 'required',
        //     'description' => 'required',
        // ]);

        $form_data = $this->validation($request->all());

        $comic = new Comic();
        $comic->title = $form_data['title'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->artists = $form_data['artists'];
        $comic->writers = $form_data['writers'];
        $comic->description = $form_data['description'];

        $comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $request->validate([
        //     'title' => 'required|max:50|min:3',
        //     'thumb' => 'max:255',
        //     'price' => 'required|max:10',
        //     'series' => 'required|max:50|min:3',
        //     'sale_date' => 'required|max:10|min:8',
        //     'type' => 'required|max:20',
        //     'artists' => 'required',
        //     'writers' => 'required',
        //     'description' => 'required'
        // ]);

        $form_data = $this->validation($request->all());

        $comic = Comic::find($id);

        // $comic->title = $form_data['title'];
        // $comic->thumb = $form_data['thumb'];
        // $comic->price = $form_data['price'];
        // $comic->series = $form_data['series'];
        // $comic->sale_date = $form_data['sale_date'];
        // $comic->type = $form_data['type'];
        // $comic->artists = $form_data['artists'];
        // $comic->writers = $form_data['writers'];
        // $comic->description = $form_data['description'];

        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);

        $comic->delete();

        return redirect(route("comics.index"));
    }

    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|max:50|min:3',
                'thumb' => 'max:255',
                'price' => 'required|max:10',
                'series' => 'required|max:50|min:3',
                'sale_date' => 'required|max:10|min:8',
                'type' => 'required|max:20',
                'artists' => 'required|max:50|min:3',
                'writers' => 'required|max:50|min:3',
                'description' => 'required'
            ],
            [
                'title.required' => 'Il titolo è obbligatorio',
                'title.max' => 'Il titolo deve essere al massimo di 50 caratteri',
                'title.min' => 'Il titolo deve essere al minimo di 3 caratteri',
                'thumb.max' => 'Il link all\'immagine deve essere al massimo di 255 caratteri',
                'description.required' => 'La descrizione è obbligatoria',
                'price.required' => "Il prezzo è obbligatorio",
                'price.max' => 'I numeri devono essere al massimo di 10 cifre',
                'series.required' => 'La serie è obbligatoria',
                'series.max' => 'La serie deve essere al massimo di 50 caratteri',
                'series.min' => 'La serie deve essere al minimo di 3 caratteri',
                'sale_date.required' => 'La data di uscita è obbligatoria',
                'sale_date.max' => 'La data di uscita deve essere al massimo di 10 caratteri',
                'sale_date.min' => 'La data di uscita deve essere al minimo di 8 caratteri',
                'type.required' => 'La serie è obbligatoria',
                'artists.required' => 'Devi inserire almeno un artista',
                'artists.max' => 'L\'artista deve essere al massimo di 50 caratteri',
                'artists.min' => 'L\'artista deve essere al minimo di 3 caratteri',
                'writers.required' => 'Devi inserire almeno uno scrittore',
                'writers.max' => 'Lo scrittore deve essere al massimo di 50 caratteri',
                'writers.min' => 'Lo scrittore deve essere al minimo di 3 caratteri'
            ]
        )->validate();

        return $validator;
    }
}
