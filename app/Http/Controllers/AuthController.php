<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

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

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
          'email'=> 'required|email',
          'password' => 'required'

        ]);

        if(auth()->attempt($request->only('email', 'password')))
        {
            return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors('les identifiants ne correspondent pas');

    }

    public function logout()
    {
        auth()->logout();
        
        return redirect()->route('/inscription/Electeur');
    }

    
    
}
