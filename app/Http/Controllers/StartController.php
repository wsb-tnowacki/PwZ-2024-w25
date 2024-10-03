<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function lista()
    {
        return view('welcome');
    }
    public function kontakt()
    {
        return view('kontakt');
    }
    public function onas()
    {
        $zadania =[
            'Zadanie 1',
            'Zadanie 2',
            'Zadanie 3'
        ];
        //return view('onas')->with('zadania', $zadania);
        return view('onas',['zadania'=> $zadania]);
    }
}
