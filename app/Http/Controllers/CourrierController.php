<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courrier;
use App\Models\Direction;
use App\Models\Organe;
use App\Models\Type;
use App\Models\Classification;
use DB;

class CourrierController extends Controller
{
    public function affichagecourrier($id)
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

            return view('courrier',compact('courriers'));  
    }

    public function modifycourrier($id)
    {
        $courrier = DB::table('courriers as t_courriers')->where('t_courriers.id',$id)
            ->join('types as t_types', 't_types.id', '=', 't_courriers.type_id')
            ->join('organes as t_organes', 't_organes.id', '=', 't_courriers.organe_id')
            ->join('directions as t_directions', 't_directions.id', '=', 't_courriers.direction_id')
            ->join('classifications as t_classifications', 't_classifications.id', '=', 't_courriers.classification_id')
            ->select(
                't_courriers.id as id',
                't_courriers.num_ordre_rrc as num_ordre_rrc',
                't_courriers.num_ordre_sce as num_ordre_sce',
                't_courriers.objet as objet',
                't_courriers.date as date',
                't_courriers.annee as annee',

                't_courriers.type_id as type_id',
                't_courriers.classification_id as classification_id',
                't_courriers.direction_id as direction_id',
                't_courriers.organe_id as organe_id',

                't_directions.direction as direction',
                't_types.type as type',
                't_classifications.classification as classification',
                't_organes.organe as organe')
            ->first();
        
        $directions=Direction::all();
        $organes=Organe::all();
        $types=Type::all();
        $classifications=Classification::all();

        return view('modifycourrier',compact('directions','organes','types','classifications','courrier'));     
    }

    public function updatecourrier(Request $request)
    {
        DB::table('courriers')->where('id',$request->id)->update([
           'num_ordre_rrc'=>$request->num_ordre_rrc,
           'num_ordre_sce'=>$request->num_ordre_sce,
           'objet'=>$request->objet,
           'date'=>$request->date,
           'annee'=>$request->annee,
           'type_id'=>$request->type,
           'organe_id'=>$request->organe,
           'direction_id'=>$request->direction,
           'classification_id'=>$request->classification,
        ]); 
        return redirect()->back()->with('message', 'Courrier modifié avec succès');
    }
    public function deletecourrier($id)
    {
        DB::table('courriers')->where('id',$id)->delete();
        return back()->with('message', 'Courrier supprimé avec succès');
    }
}
