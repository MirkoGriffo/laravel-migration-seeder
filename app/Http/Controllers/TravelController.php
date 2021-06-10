<?php

namespace App\Http\Controllers;

use App\Travel;

class TravelController extends Controller
{
    //Archivio viaggi

    public function index()
    {
        $travels = Travel::paginate(8);

        return view('travels', compact('travels'));
    }
}
