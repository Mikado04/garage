<?php

namespace App\Http\Controllers;

use App\Models\Vehicules;
use Illuminate\Http\Request;

class VehiculesController extends Controller
{
    //

    public function vehicules_enregistrement(Request $request){
        $immatriculation = $request->immatriculation;
        $marque = $request->marque;
        $modele = $request->modele;
        $couleur = $request->couleur;
        $annee = $request->annee;
        $kilometrage = $request->kilometrage;
        $carrosserie = $request->carrosserie;
        $energie = $request->energie;
        $boite = $request->boite;

        Vehicules::create([
            'immatriculation'=> $immatriculation,
            "marque"=> $marque,
            "modele"=> $modele,
            "couleur"=> $couleur,
            "annee"=> $annee,
            "kilometrage"=> $kilometrage,
            "carrosserie"=> $carrosserie,
            "energie"=> $energie,
            "boite"=> $boite
        ]);
        
        return redirect()->route('welcome');

    }

    public function vehicules_list(Request $request){
        $vehicules = Vehicules::all();
        return view('vehicules_list', compact('vehicules'));
    }

    public function modifier_vehicules($id){
        $vehicules = Vehicules::find($id);
        return view('modifier_vehicules', compact('vehicules'));
    }

    public function enregistrement(Request $request, $id){
        $vehicules = Vehicules::find($id);
        $vehicules ->immatriculation = $request->immatriculation;
        $vehicules ->marque = $request->marque;
        $vehicules ->modele = $request->modele;
        $vehicules ->couleur = $request->couleur;
        $vehicules ->annee = $request->annee;  
        $vehicules ->kilometrage = $request->kilometrage;   
        $vehicules ->carrosserie = $request->carrosserie;
        $vehicules ->energie = $request->energie;
        $vehicules ->boite = $request->boite;
        $vehicules ->save();

        return redirect()-> route('vehicules_list');
    }

    public function supprimer_vehicules($id){
        $vehiculeurs = Vehicules::find($id);
        $vehiculeurs ->delete();
        return redirect()->route('vehicules_list');
    }
}
