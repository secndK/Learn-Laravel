<?php

use App\Http\Controllers\MonPremierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', [MonPremierController::class, 'afficherAccueil']);

// apprentissage de blade


Route::get('/montre', function() {

    $hour = date('h');
    $name = 'Jean-Eudes';
    $isadmin = false;
    $users = [
        'nom' => 'Jean-eudes',
        'email' => 'KoffikanJE@gmail.com',
        'age' => 23
    ];
    $produits = [];
    return view('montre', compact('hour', 'name', 'isadmin', 'users', 'produits'));

});


Route::get('/home', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

?>
