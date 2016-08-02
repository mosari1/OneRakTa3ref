<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

use App\Http\Requests;

class AchatController extends Controller
{
    public function create()

    {
        $produits = Produit::all();
        return view('Achat.create',compact('produits'));


    }

    public function store(Request $request){
        foreach (array_combine($request->id,$request->quantite) as $id => $quantite){
            echo $id;
            echo $quantite;
        }
        dd();
    }
}
