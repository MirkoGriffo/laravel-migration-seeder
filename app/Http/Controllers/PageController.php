<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    //Homepage

    public function index()
    {
        return view('home');
    }

// Contatti

    public function contatti()
    {
        return view('contatti');
    }
}
