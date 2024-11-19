<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonPremierController extends Controller
{

    public function afficherAccueil()
    {
        $message = "Bienvenue sur ma première page contrôlée par Laravel ! 🎉";
        return view('accueil', compact('message'));
    }

}
