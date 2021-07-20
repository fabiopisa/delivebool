<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function meals(){
        return $this->belongsToMany('App\Meal');
    }
}
