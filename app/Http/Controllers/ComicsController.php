<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();  // Recupera tutti i fumetti dal modello Comic
        return view('comics.index', compact('comics'));  // Passa i fumetti alla vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */

public function store(Request $request)
{

    dump($request->all());

    //inserire i dati nel database
    $comic = new Comic();
    $comic->title = $request->title;
    $comic->description = $request->description;
    $comic->thumb = $request->thumb;
    $comic->price = $request->price;
    $comic->series = $request->series;
    $comic->sale_date = $request->sale_date;
    $comic->type = $request->type;
    $comic->save();

    // Dopo aver salvato i dati, reindirizza l'utente a una pagina appropriata, per esempio la lista dei fumetti
    return redirect()->route('comics.index'); 
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);  // Trova il fumetto o genera un errore 404
        return view('comics.show', compact('comic'));  // Passa il fumetto alla vista
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
