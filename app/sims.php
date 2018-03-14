<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sims extends Model
{
    public function leagues(){
        return $this->hasMany( 'App\leagues', 'sim');   
    }
}
