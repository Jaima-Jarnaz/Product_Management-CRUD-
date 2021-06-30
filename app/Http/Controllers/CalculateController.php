<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    // public  function display($num1,$num2,$value)
    // {
    //    return view('index',compact('num1','num2','value'));
    // }
    public  function display($num1,$num2,$value)
    {
       return view('index',compact('num1','num2','value'));
    }
}