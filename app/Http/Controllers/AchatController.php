<?php

namespace App\Http\Controllers;

use App\Achat;
use App\Produit;
use Illuminate\Http\Request;

use App\Http\Requests;

class AchatController extends Controller
{
    public function index(){
        $achats = Achat::all();
//        foreach ($achats->produit as $achat){
////            foreach ($achat->produit() as $pro){
////                echo ($pro->code);
////            }
//           dd ($achat->code);
//        }
//        dd();
        return view('Achat.index',compact("achats"));
    }
    public function create()

    {
        $produits = Produit::all();
        return view('Achat.create',compact('produits'));
    }

    public function store(Request $request){
        if ($request->total_ttc != null && $request->total_ht != null){

            $code = Achat::all()->sortBy('id',true)->last()->code;
            $code = str_replace('A','',$code);
            $newcode = (int)$code + 1;
            $achat = new Achat();
            $achat->total_ttc = $request->total_ttc;
            $achat->total_ht = $request->total_ht;
            $achat->code = 'A00000'.$newcode;
            $achat->save();
            foreach (array_combine($request->id,$request->quantite) as $id => $quantite){
                $produit = Produit::find($id);
                $achat->produit()->attach($produit,['qte' => $quantite]);
            }
        }
        $produits = Produit::all();
        return view('Achat.create',compact('produits'));
    }
    public function edit($id){
        $achats = Achat::find($id);
        $produits = Produit::all();
        return view('Achat.edit',compact('achats','produits'));
    }
    public function update($id,Request $request){
        $achat = Achat::find($id);

        Achat::find($id)->produit()->detach();
        foreach (array_combine($request->id,$request->quantite) as $id => $quantite){
            $produit = Produit::find($id);
            $achat->produit()->attach($produit,['qte' => $quantite]);
        }
        $achat->update([
            'total_ttc' => $request->total_ttc,
            'total_ht' => $request->total_ht,
        ]);
    }
    public function destroy($id){
        $achat = Achat::find($id);
        $achat->produit()->detach();
        $achat->delete();
        return $this->index();
    }
}
