<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $restaurants = Restaurant::all(); */
       $restaurants= DB::table('users')
        ->select(
            'restaurants.id',
            'restaurants.name',
            'restaurants.slug',
            'restaurants.address',
            'restaurants.created_at as date',
            'users.name as nome',
            'users.surname',
/*          'meals.name as piatto',
            'meals.img',
            'meals.available',
            'meals.description',
            'meals.price',
            'meals.created_at as data creazione',
            'meals.restaurant_id' */
        )
        ->join('restaurants','restaurants.user_id', '=', 'users.id')

     /*    ->join('meals', 'meals.restaurant_id', '=', 'restaurants.id' ) */
        ->get();
        return response()->json($restaurants);

            /* $meals= DB::table('meals')
                    ->select(
                        'meals.img',
                        'meals.available',
                        'meals.description',
                        'meals.price',
                        'meals.created_at as data creazione',
                        'meals.restaurant_id',
                        'restaurants.id',
                        'restaurants.name',
                        'restaurants.slug',
                        'restaurants.address',
                        'restaurants.created_at as date'
                    )->join('restaurants', 'meals.restaurant_id', '=',  'restaurants.id')
                     ->get();
            return response()->json($meals); */

    }


    public function show($id)
    {
        $restaurant = Restaurant::all()->where('id', $id)->with(['user'])->find($id);
        if($restaurant){
            $data=[
                'success' => true,
                'data' => $restaurant
            ];
            return response()->json($data);
        }
        return response()->json(['success'=>false]);
    }

}
