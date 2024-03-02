<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direction;
use DB;

class DashboardController extends Controller
{
    public function choixdirection()
    {
        $directions=Direction::all();
        //$materiel=DB::table('materiels')->where('id',$id)->first();
        //$specialites=DB::table('specialites')->where('materiel_id',$id)->get();
        return view('dashboard',compact('directions'));     
    }
}
