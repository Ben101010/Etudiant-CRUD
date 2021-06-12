<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Database\Factories\EtudiantFactory;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
     public function index()
        {
            $etudiants = Etudiant::orderBy("nom", "asc")->paginate(5);
             return view("etudiant", compact("etudiants"));
        }

        public function create()
        {
            $classes = Classe::all();
             return view("CreateEtudiant", compact("classes"));
        }


        public function ajouter(Request $request)
        {
           $request->validate([
               "nom"=>"required",
               "prenom"=>"required",
               "classe_id"=>"required",
           ]);


           // On peut l'écrire comme ceci si le fillebale est definit dans le modèle
                //Etudiant::create($request->all());


            // On l'écrire comme ceci si le fillebale n'est pas definit dans le modèle
           etudiant::create([
               "nom"=>$request->nom,
               "prenom"=>$request->prenom,
               "classe_id"=>$request->classe_id
           ]);

           return back()->with("success", "Etudiant ajouté avec succès !");

        }

        public function delete(Etudiant $etudiant){

            $etudiant->delete();

            return back()->with("supprimerSuccess", "Etudiant supprimé avec succès !");

        }

}
