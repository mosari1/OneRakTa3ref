<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class FournisseurController extends Controller
{
    public function create(Request $request){
        $fournisseur = new Fournisseur();
        $fournisseur->nom = $request->nom;
        $fournisseur->prenom = $request->prenom;
        $fournisseur->tel = $request->tel;
        $fournisseur->email = $request->email;
        $fournisseur->rc = $request->rc;
        $fournisseur->rib = $request->rib;
        $fournisseur->nis = $request->nis;
        $fournisseur->ai = $request->ai;
        $fournisseur->nif = $request->nif;
        Session::flash('ajout_fournisseur', 'Fournisseur ajouté avec succès' );
        $fournisseur->save();
        return view('Fournisseur.Create');
    }

    public function edit(Request $request){
        Fournisseur::where('id',$request->id)->update([
            'nom'    => $request->nom,
            'prenom' => $request->prenom,
            'tel'    => $request->tel,
            'email'  => $request->email,
            'rc'     => $request->rc,
            'rib'    => $request->rib,
            'nis'    => $request->nis,
            'ai'     => $request->ai,
            'nif'    => $request->nif,
        ]);
        Session::flash('modif_fournisseur', 'Fournisseur modifié avec succès' );
        $fournisseur = Fournisseur::find($request->id);
        return view('Fournisseur.Edit',compact('fournisseur'));
    }
}

