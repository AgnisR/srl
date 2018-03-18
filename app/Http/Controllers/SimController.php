<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\articles;
use App\leagues;

class SimController extends Controller
{
    public function LFS(){
        $sim="Live for Speed";
        $sim_id=1;
        $league = leagues::all();
        return view('sim')->with('sim', $sim)->with('sim_id', $sim_id)->with('league', $league);
    }
        public function RaceRoom(){
        $sim="RaceRoom";
        $sim_id=2;
        $league = leagues::all();
        return view('sim')->with('sim', $sim)->with('sim_id', $sim_id)->with('league', $league);
    }
    public function anySim(){
        $league = leagues::all();
        return view('sim')->with('sim', $sim)->with('sim_id', $sim_id)->with('league', $league);        
    }
}
