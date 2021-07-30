<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
   protected $fillable=[
         'id',
        'user_id',
        'name',
        'slug',
        'address'
   ];

   public function categories(){
        return $this->belongsToMany('App\Category');
   }

   public function user(){
    return $this->belongsTo('App\User');
   }

   public function meals(){
      return $this->hasMany('App\Meal');
   }

   public function orders(){
     return $this->hasMany('App\Order');
   }

}
