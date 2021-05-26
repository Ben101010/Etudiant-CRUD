<?php

namespace App\Http\Controllers;

use app\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
     public function index()
        {
            $etudiants = Etudiant::orderBy("nom", "asc")->paginate(7);
            return view("etudiant", compact("etudiants"));
        }
}
