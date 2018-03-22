<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\leagues;
use App\sims;
use Auth;

class LeagueController extends Controller
{
    public function leagues(){
    $league = leagues::all();
    return view('leagues')->with('league', $league);
    }
    
    public function league($id){
        $league = leagues::find($id);
        $sim = sims::all();
        return view ('oneleague')->with('league', $league)->with('sim', $sim);
    }
    
    public function myleagues(){
        $league = leagues::all();
        return view('myleagues')->with('league', $league);
    }
    
    public function create(){
        return view ('leagues.createL');
    }
    
    public function store(){
        $sim = DB::table('sims')->where('name', request('sim'))->first();
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);
        
        $post = new leagues;
        $post->name = request('name');
        $post->description = request('description');
        $post->organizer = auth::user()->id;
        $post->sim = $sim->id;
        $post->save();
        
        return redirect('/myleagues');
    }

}
