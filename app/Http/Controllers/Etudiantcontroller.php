<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Etudiantcontroller;

class Etudiantcontroller extends Controller

{
    public function login_etudiant()
    {
        return view('etudiant.login');
    }
    public function accueil_etudiant()
    {
        return view('etudiant.accueil');
    }
    public function liste_etudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }
    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }
    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'email'=>'required',
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->telephone = $request->telephone;
        $etudiant->email = $request->email;
        $etudiant->save();

        return redirect('/ajouter')->with('status', 'L\'Etudiant a bien été ajouté avec succes.');
    }
    public function update_etudiant($id){
        $etudiants = Etudiant::find($id);
        return view('etudiant.update', compact('etudiants'));
    }
    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'email'=>'required',
        ]);

        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->telephone = $request->telephone;
        $etudiant->email = $request->email;
        $etudiant->update();
        return redirect('/etudiant')->with('status', 'L\'Etudiant a bien été modifié avec succes.');
    }
    public function delete_etudiant($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status', 'L\'Etudiant a bien été supprimé avec succes.');
    }
}

