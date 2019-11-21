<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    public function index(Request $request){
        if(empty($patients)){
            $patients = Patient::sortable()->paginate(10);
        }
        if(!empty($request->input('suche')) || !empty($request->input('sucheB'))){
            if(!empty($request->input('suche'))){
                $suche="%".$request->input('suche')."%";
            }else{
                $suche="%".$request->input('sucheB')."%";
            }
            $patients = Patient::query()
                ->where('svnr','LIKE',  $suche )
                ->orwhere('lastname','LIKE',  $suche )
                ->orwhere('address','LIKE',  $suche )
                ->orwhere('plz','LIKE',  $suche )
                ->orwhere('city','LIKE',  $suche )
                ->orwhere('country','LIKE',  $suche )
                ->sortable()
                ->paginate(10);
        }
        return view('patients', compact('patients', 'request'));
}
}
