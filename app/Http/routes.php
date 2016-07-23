<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::post('Authentification','AuthentificationController@authentification');
Route::resource('connexion','AuthentificationController');

Route::group(['middleware' => ['web','conecte']], function () {
    Route::get('/', function () {

        return redirect()->action('AuthentificationController@index');
    });
    Route::resource('Dashboard','DashboardController');
    Route::get('logout','AuthentificationController@logout');
    Route::get('Fournisseur.index',function(){
        $fournisseurs = \App\Fournisseur::all();
       return view('Fournisseur.Index',compact('fournisseurs'));
    });
    Route::get('Fournisseur.create',function(){
        //$fournisseurs = \App\Fournisseur::all();
        return view('Fournisseur.Create');
    });
    Route::post('Fournisseur.Validation','FournisseurController@create');
     Route::get('    Fournisseur.Modification',function(){
         $fournisseur = \App\Fournisseur::find(\Illuminate\Support\Facades\Input::get('id'))->first();
         return view('Fournisseur.Edit',compact('fournisseur'));
     });
    Route::post('Fournisseur.Modification','FournisseurController@edit');

    
    //////////////////////////LOTFI ROUTE



    Route::resource('Produit','ProduitController');
    Route::resource('Client','ClientController');


/////////////////////////////////////
});
