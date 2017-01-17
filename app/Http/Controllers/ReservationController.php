<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(array $data)
    {
        $reservationsuser=Reservation::all()->where('user_id','=', $data->id);
        return view('', compact('reservationsuser'));
    }
}
