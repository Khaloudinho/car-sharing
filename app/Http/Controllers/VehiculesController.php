<?php

namespace App\Http\Controllers;

use App\Reservation;
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

    public function storeReservation(array $data)
    {
        dd($data);
        $reservation=new Reservation();
        $reservation->date_debut=$data['date_debut'];
        $reservation->date_retour=$data['date_retour'];
        $reservation->statut=$data['statut'];
        $reservation->save();
        redirect('/vehicules');
        //return view('vehicules', compact('vehicules'));
    }


}
