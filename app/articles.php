<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
        public function comments(){
        return $this->hasMany( 'App\comments', 'id');   
    }
}
