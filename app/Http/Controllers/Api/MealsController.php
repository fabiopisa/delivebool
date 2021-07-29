<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Restaurant;
use App\Meal;
use Illuminate\Http\Request;

class MealsController extends Controller
{
    public function index(){
        $meals= DB::table('meals')
                    ->select(
                        'meals.name as piatto',
                        'meals.img',
                        'meals.available',
                        'meals.description',
                        'meals.price',
                        'meals.created_at as data creazione',
                        'meals.restaurant_id',
                    )->get();

            return response()->json($meals);
    }

    public function show($id)
    {
       $restaurant= Meal::with('restaurant')->where('restaurant_id',$id)->get();
       dump($restaurant);
        /* if($restaurant){
            $data=[
                'success' => true,
                'data' => $restaurant
            ];
            return response()->json($data);
        } */
        return response()->json($restaurant);
    }
}
