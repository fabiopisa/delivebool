<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }
    
    public function types(){
        return $this->belongsToMany('App\Type');
    }

    public function orders(){
        return $this->belongsToMany('App\Order');
    }
}
