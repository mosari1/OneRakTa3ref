<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;

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
        $username = $request->username;
        $password = $request->password;
        echo $username;
        echo $password;
    }
}
