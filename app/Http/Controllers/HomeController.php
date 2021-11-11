<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        echo '<pre>::1::'.print_r(-1,true).'</pre>';
        return view('home', []);
    }

}
