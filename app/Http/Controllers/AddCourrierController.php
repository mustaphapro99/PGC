<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courrier;
use App\Models\Direction;
use App\Models\Organe;
use App\Models\Type;
use App\Models\Classification;
use DB;

class AddCourrierController extends Controller
{
    public function addcourrier()
    {   

        $directions=Direction::all();
        $organes=Organe::all();
        $types=Type::all();
        $classifications=Classification::all();

        return view('addcourrier',compact('directions','organes','types','classifications'));     
    }
    
    public function savecourrier (Request $request){
        DB::table('courriers')->insert([
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
        

        return redirect()->route('addcourrier')->with('message', 'Courrier ajouté avec succès'); 
    }
}
