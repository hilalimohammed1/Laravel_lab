<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function create(){
        return view('etudiant.create');
    }

    public function store(Request $request){
        $request->validate([
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'type_bac' => 'required',
            'filiere' => 'required',
        ], [
            'nom.required' => 'Veuillez saisir le nom',
            'nom.min' => 'Le nom doit contenir au moins 3 caractères',
            'prenom.required' => 'Veuillez saisir le prénom',
            'prenom.min' => 'Le prénom doit contenir au moins 3 caractères',
            'email.required' => "Veuillez saisir un email valide",
            'email.email' => 'Veuillez saisir une adresse email valide',
            'password.required' => 'Le mot de passe est obligatoire',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères',
            'password.confirmed' => 'Les mots de passe ne correspondent pas',
            'type_bac.required' => 'Veuillez choisir le type de bac',
            'filiere.required' => 'Veuillez sélectionner une filière',
    ]);

        return redirect()->back()->with('success', 'Étudiant ajouté avec succès');
    }
}