<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
   public function categories(){
        return $this->belongsToMany('App\Category');
   }

   public function owner(){
    return $this->belongsTo('App\Owner');
   }

   public function meals(){
      return $this->hasMany('App\Meal');
   }
   
   public function orders(){
     return $this->hasMany('App\Order');
   }

}
