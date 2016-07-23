<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Produit;
use App\Type_produit;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;

class ProduitController extends Controller
{


    public function index(){
        $produits=Produit::with('type')->paginate(5);


        return view('Produit.index',compact('produits'));
    }

    public function create()

    {

        $produit= new Produit();
        $types= Type_produit::all();



        return view('Produit.create',compact('types'));


    }
    public function store(Request $request)
    {


        $validation = Validator::make($request->input(), Produit::$rules);

        if ($validation->passes()){
            $produit=Produit::Create($request->input());

            if($produit)
            {

                \Session::flash('message_succe','Produit ajoutée avec succès ');
                return redirect('Produit');
            }
            return redirect(route('Produit.index'))->with('message_alert', 'erreure lors de linsertion du produit');
        }
        return redirect(route('Produit.create'))
            ->withInput()
            ->withErrors($validation)
            ->with('message_alert', 'There were validation errors.');

    }

    public function edit($id)

    {
        $types= Type_produit::all();
        $produit=Produit::with('type')->findOrFail($id);

        return view('Produit.edit',compact('produit','types'));

    }

    public function update($id,Request $request)
    {

        $validation = Validator::make($request->input(), Produit::$rules);

        $produit=Produit::findOrFail($id);

        if ($validation->passes())
        {

            $produit->update($request->all());



            return redirect(route('Produit.index'))->with('message','Produit modifiée avec succès.');
        }
        return redirect(route('Produit.edit',$id))
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    public function destroy($id)
    {
        $produit= Produit::find($id);
        $produit->delete();

        return redirect(route('Produit.index'))->with('message_succe','Produit suprimée avec succès.');


    }









}
