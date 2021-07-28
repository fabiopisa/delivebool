<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable=[
        'restaurant_id',
        'name',
        'description',
        'price',
        'img',
        'available',
    ];
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
