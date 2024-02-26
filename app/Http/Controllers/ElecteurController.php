<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidat;
use App\Models\Electeur;
use Illuminate\Http\Request;

class ElecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidat = Candidat::all();
        return view('electeurs.vote', compact('candidat'));
    }

    public function listage()
    {
         $vote = Electeur::all();
        return view('electeurs.listeVotant', compact('vote'));
    }
    


    public function voter(Request $request)
    {

        // $request->validate([
        //     'nom' => 'required',
        //     'prenom' => 'required',
        //     'etablissement' => 'required',
        // ]);
        $vote = new Electeur();

        $vote->nom = $request->nom; 
        $vote->prenom = $request->prenom;
        $vote->etablissement = $request->etablissement;
        $vote->candidat_id = $request->candidat_id;
        $vote->save();
        
        return redirect()->back()->with('success','vote effectuer avec succes, MEEK vous remercie');
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //      return view('/dashboard');
    // }


//     public function inscriptionElecteur(Request $request)
// {

//     // Création d'un nouvel électeur
//     $electeur = new User();

//     // Attribution des valeurs
//     $electeur->name = $request->name;
//     $electeur->email = $request->email;
//     $electeur->password = bcrypt($request->password);

//     // Enregistrement de l'électeur
//     $electeur->save();

//     // Redirection avec un message de succès
//     return redirect()->back()->with('success', 'Votre inscription sur la plateforme du MEEK a bien réussi.');
// }





    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
