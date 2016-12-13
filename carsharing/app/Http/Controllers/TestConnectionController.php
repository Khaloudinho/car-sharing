<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class testConnectionController extends Controller
{
    public function testCon(){
        $users = DB::table('ESSAI')->get();
        dd($users);
        return view('welcome', $users);
    }
}
