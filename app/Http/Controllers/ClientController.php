<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class ClientController extends Controller
{
    public function index(){
        $clients=Client::paginate(5);


        return view('Client.index',compact('clients'));
    }

    public function create()

    {

        $client= new Client();

        return view('Client.create',compact('client'));


    }
    public function store(Request $request)
    {


        $validation = Validator::make($request->input(), Client::$rules);

        if ($validation->passes()){
            $client=CLient::Create($request->input());

            if($client)
            {

                \Session::flash('message_succe','Produit ajoutée avec succès ');
                return redirect('Client');
            }
            return redirect(route('Client.index'))->with('message_alert', 'erreure lors de linsertion du produit');
        }
        return redirect(route('Client.create'))
            ->withInput()
            ->withErrors($validation)
            ->with('message_alert', 'There were validation errors.');

    }

    public function edit($id){



        $client=Client::findOrFail($id);


        return view('Client.edit',compact('client'));
    }

    public function update($id, Request $request)
    {

        $validation = Validator::make($request->input(), Client::$rules);

        $client=Client::findOrFail($id);

        if ($validation->passes())
        {

            $client->update($request->all());



            return redirect(route('Client.index'))->with('message_succe','Produit modifiée avec succès.');
        }
        return redirect(route('Client.edit',$id))
            ->withInput()
            ->withErrors($validation)
            ->with('message_alert', 'There were validation errors.');
    }

    public function destroy($id)
    {
        $client= Client::find($id);
        $client->delete();

        return redirect(route('Client.index'))->with('message_succe','Client suprimée avec succès.');


    }
}
