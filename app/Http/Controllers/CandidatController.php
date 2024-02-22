<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('candidats.ajoutCandidat');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $candidat = new Candidat();

        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->etablissement = $request->etablissement;
        $candidat->filiere = $request->filiere;
        $candidat->niveau = $request->niveau;

        $candidat->save();
        return redirect()->back()->with('success','candidat enregistrer');
    }

    /**
     * Display the specified resource.
     */
    public function liste()
    {
        $candidat = Candidat::all();
        // dd($candidat);
        return view ('candidats.listeCandidat', compact('candidat'));
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
