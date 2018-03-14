<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leagues extends Model
{
    public function sims(){
        return $this->belongsTo( 'App\sims', 'name');   
    }
    public function User(){
        return $this->belongsTo( 'App\User', 'organizer');   
    }

}
