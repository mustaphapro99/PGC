<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courrier;
use DB;

class FiltreAnnuelController extends Controller
{
    public function annee($id)
        {
            $courriers = DB::table('courriers as t_courriers')->where('direction_id',$id)
            ->join('types as t_types', 't_types.id', '=', 't_courriers.type_id')
            ->join('organes as t_organes', 't_organes.id', '=', 't_courriers.organe_id')
            ->join('classifications as t_classifications', 't_classifications.id', '=', 't_courriers.classification_id')
            ->select(
                't_courriers.id as id',
                't_courriers.num_ordre_rrc as num_ordre_rrc',
                't_courriers.num_ordre_sce as num_ordre_sce',
                't_courriers.objet as objet',
                't_courriers.date as date',
                't_courriers.type_id as type_id',
                't_courriers.classification_id as classification_id',
                't_courriers.type_id as type_id',
                't_courriers.organe_id as organe_id',
                't_types.type as type',
                't_classifications.classification as classification',
                't_organes.organe as organe')
            ->get();

           
            return view('filtreannuel',compact('courriers'));  
        }
}
