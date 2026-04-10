<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures = Voiture::with('proprietaire')->get();
        return view('voitures.index', compact('voitures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voitures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marque'=>'required',
            'modele'=>'required',
            'annee'=>'required|integer',
            'proprietaire_id'=>'required|exists:proprietaires,id',
        ]);
        Voiture::create($request->all());
        return redirect()->route('voitures.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Voiture $voiture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voiture $voiture)
    {
        return view('voitures.edit', compact('voiture'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voiture $voiture)
    {
        $request->validate([
            'marque'=>'required',
            'modele'=>'required',
            'annee'=>'required|integer',
            'proprietaire_id'=>'required|exists:proprietaires,id',
        ]);
        $voiture->update($request->all());
        return redirect()->route('voitures.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voiture $voiture)
    {
        $voiture->delete();
        return redirect()->route('voitures.index');
    }
}
