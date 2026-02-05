<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculController extends Controller
{
    // public function add($a, $b){
    //     $s = $a + $b;
    //     return "La somme de $a + $b = $s";
    // }

    public function add($a, $b){
        $s = $a + $b;
        return view('affichage', ['s' => $s]); 

        // affichage => nom de la vue
        // 's' => nom de la variable dans la vue
        // $s => valeur calculée dans le controleur
    }


    public function mult($a, $b){
        $s = $a * $b;
        return "Le résultat de $a * $b = $s";
    }
}