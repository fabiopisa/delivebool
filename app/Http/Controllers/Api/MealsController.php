<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
                    )->where('meals.restaurant_id', 'id')->get();
            return response()->json($meals);
    }

    public function show($id)
    {
        $meal = Meal::where('id', $id)->with(['restaurant'])->find($id);
        if($meal){
            $data=[
                'success' => true,
                'data' => $meal
            ];
            return response()->json($data);
        }
        return response()->json(['success'=>false]);
    }
}
