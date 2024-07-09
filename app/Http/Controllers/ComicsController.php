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
     * Include validation to ensure data integrity.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:255'
        ]);

        Comic::create($validatedData);
        return redirect()->route('comics.index')->with('success', 'Comic added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);  // Trova il fumetto o genera un errore 404
        return view('comics.show', compact('comic'));  // Passa il fumetto alla vista
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     * Also include validation.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:255'
        ]);

        $comic = Comic::findOrFail($id);
        $comic->update($validatedData);
        return redirect()->route('comics.index')->with('success', 'Comic updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index')->with('success', 'Comic deleted successfully');
    }
}