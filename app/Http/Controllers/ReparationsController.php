<?php

namespace App\Http\Controllers;

use App\Models\Reparations;
use Illuminate\Http\Request;

class ReparationsController extends Controller
{
    //
    public function reparation(Request $request){
        $id = $request->id;
        return view("reparation", compact("id"));
    }

    public function reparations_enregistrement(Request $request){
        $vehicule_id = $request->vehicule_id;
        $technicien_id = $request->technicien_id;
        $date = $request->date;
        $duree_main_oeuvre = $request->duree_main_oeuvre;
        $objet_reparation = $request->objet_reparation;

        Reparations::create([
            'vehicule_id'=> $vehicule_id,
            "technicien_id"=> $technicien_id,
            "date"=> $date,
            "duree_main_oeuvre"=> $duree_main_oeuvre,
            "objet_reparation"=> $objet_reparation,
        ]);
        
        return redirect()->route('reparation_list');
    }

    public function reparation_list(Request $request){
        $reparation = Reparations::all();
        return view('reparation_list',compact('reparation'));
    }

    public function supprimer_reparation($id){
        $reparation = Reparations::find($id);
        $reparation->delete();
        return redirect()->route('reparation_list');

    }

    public function modifier_reparation($id){
        $reparation = Reparations::find($id);
        return view('modifier_reparation',compact('reparation'));
    }

    public function enregistrement_reparation(Request $request, $id){
        $reparation = Reparations::find($id);
        $reparation->date= $request->date;
        $reparation->duree_main_oeuvre= $request->duree_main_oeuvre;
        $reparation->objet_reparation= $request->objet_reparation;
        $reparation->save();
         return redirect()->route('reparation_list');
      
    }

}
