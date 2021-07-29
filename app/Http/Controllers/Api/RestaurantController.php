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
       $restaurants= Restaurant::with('meals')

        ->get();

        return response()->json($restaurants);
    }



    public function show($id)
    {
        $restaurant = Restaurant::find($id);

        $meals= $restaurant->meals;

        return response()->json($meals);
/*         if($restaurant){
            $data=[
                'success' => true,
                'data' => $restaurant
            ];
            return response()->json($data);
        }
        return response()->json(['success'=>false]); */

    }

}
