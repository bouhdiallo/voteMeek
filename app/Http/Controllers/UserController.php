<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


     public function inscriptionElecteur(Request $request)
{

    // Création d'un nouvel électeur
    $electeur = new User();

    // Attribution des valeurs
    $electeur->name = $request->name;
    $electeur->email = $request->email;
    $electeur->password = bcrypt($request->password);

    // Enregistrement de l'électeur
    $electeur->save();

    // Redirection avec un message de succès
    return redirect()->back()->with('success', 'Votre inscription sur la plateforme du MEEK a bien réussi.');
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
