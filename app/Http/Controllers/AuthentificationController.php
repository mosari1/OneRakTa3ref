<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Utilisateur;

class AuthentificationController extends Controller
{
    public function index (){
//        if (Session::has('SadminID') && Session::get('poste') == 'admin'){
//            return redirect()->action('DashboardController@index');
//        }
//        if (Session::has('SvendeurID') && Session::get('poste') == 'vendeur') {
//            return redirect()->action('DashboardController@index');
//        }
        return view('Authentification.login');
    }
    public function Authentification(Request $request){
        $pseudo = $request->username;
        $password = $request->password;
        $admin =  Utilisateur::where('pseudo',$pseudo)->where('password',$password)->first();
        $vendeur =  Utilisateur::where('pseudo',$pseudo)->where('password',$password)->first();
        if ($admin){
            Session::put('SadminID',$admin->id);
            Session::put('Snom',    $admin->nom);
            Session::put('Sprenom', $admin->prenom);
            Session::put('Semail',  $admin->email);
            Session::put('Sposte',  $admin->poste);
            Session::put('Spseudo',  $admin->pseudo);
            return redirect()->action('DashboardController@index');

        }
        elseif ($vendeur){
            Session::put('SvendeurID',$vendeur->id);
            Session::put('Snom',    $vendeur->nom);
            Session::put('Sprenom', $vendeur->prenom);
            Session::put('Semail',  $vendeur->email);
            Session::put('Sposte',  $vendeur->poste);
            Session::put('Spseudo',  $vendeur->pseudo);
            return redirect()->action('DashboardController@index');
        }
        else{
            Session::flash('user_not_found_msg', 'Veuillez vérifier votre psw ou username' );
            return view('Authentification.login');
        }
    }
}
