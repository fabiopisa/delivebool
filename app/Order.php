<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function meals(){
        return $this->belongsToMany('App\Meal');
    }

    public function customer(){
        return $this->hasOne('App\Customer');
    }

    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }
}
