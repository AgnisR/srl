<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    public function articles(){
        return $this->belongsTo('App\articles', 'target_id');   
    }
    public function Users(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
