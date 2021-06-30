<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $req){
        $req->session()->put('logindata',$req->input());
        //return $req->session()->get('logindata');
        return redirect('/');

    }
}