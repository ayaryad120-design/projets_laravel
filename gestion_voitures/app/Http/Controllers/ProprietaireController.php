<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use Illuminate\Http\Request;

class ProprietaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proprietaires = Proprietaire::all();
        return view('proprietaires.index', compact('proprietaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proprietaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'email'=>'required|email|unique:proprietaires',
            'telephone'=>'required',
        ]);
        Proprietaire::create($reaquest->all());
        return redirect()->route('proprietaires.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proprietaire $proprietaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proprietaire $proprietaire)
    {
        return view('proprietaires.edit', compact('proprietaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proprietaire $proprietaire)
    {
        $request->validate([
            'nom'=>'required',
            'email'=>'required|email|unique:proprietaires,email,'.$proprietaire->id,
            'telephone'=>'required',
        ]);
        $proprietaire->update($request->all());
        return redirect()->route('proprietaires.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proprietaire $proprietaire)
    {
        $proprietaire->delete();
        return redirect()->route('proprietaires.index');
    }
}
