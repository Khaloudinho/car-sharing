<?php

namespace App\Http\Controllers;

use App\Vehicule;
use Illuminate\Http\Request;

class VehiculesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules=Vehicule::join('type_vehicule','vehicule.id','=','type_vehicule.id')->get();
        //dd($vehicules);
        return view('vehicules', compact('vehicules'));
    }
}
