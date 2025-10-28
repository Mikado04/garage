<?php

namespace App\Http\Controllers;

use App\Models\Technicines;
use App\Models\User;
use Illuminate\Http\Request;

class TechnicinesController extends Controller
{
    //
    public function technicines_enregistrement(Request $request){
        $nom=$request->nom;
        $prenom=$request->prenom;
        $specialite=$request->specialite;
        $email= $request->email;
        $password= $request->password;

        Technicines::create([
            'nom'=>$nom,
            'prenom'=>$prenom,
            'specialite'=>$specialite
        ]);
        

        User::create([
            'name'=>$nom,
            'email'=>$email,
            'password'=> bcrypt($password),
        ]);

        return redirect()->route('techniciens_list'); ;
    }

    public function techniciens_list(Request $request){
        $techniciens = Technicines::all();
        return view('techniciens_list',compact('techniciens'));
    }

    public function supprimer($id){
        $techniciens = Technicines::find($id);
        $techniciens->delete();
        return redirect()->route('techniciens_list');

    }

    public function modifier($id){
        $techniciens = Technicines::find($id);
        return view('modifier',compact('techniciens'));
    }

    public function enregistrement(Request $request, $id){
        $techniciens = Technicines::find($id);
        $techniciens->nom= $request->nom;
        $techniciens->prenom= $request->prenom;
        $techniciens->specialite= $request->specialite;
        $techniciens->save();
         return redirect()->route('techniciens_list');
      
    }

    
}
