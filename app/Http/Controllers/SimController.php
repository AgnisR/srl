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
        $league = leagues::all();
        return view('sim')->with('sim', $sim)->with('league', $league);
    }
        public function RaceRoom(){
        $sim="RaceRoom";
        $league = leagues::all();
        return view('sim')->with('sim', $sim)->with('league', $league);
    }
}
