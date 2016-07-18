<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(){
        if (Session::has('SadminID') && Session::get('Sposte') == 'administrateur'){
            return view('Dashboard.Dashboard');
        }
        elseif(Session::has('SvendeurID') && Session::get('Sposte') == 'vendeur'){
            return view('Dashboard.Dashboard');
        }
        else{
            return view('Authentification.login');
        }
    }
}
