<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Meal;
use Illuminate\Http\Request;
use App\Http\Requests\MealRequest;
use App\Restaurant;
use App\User;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants=Restaurant::all();

        return view('admin.meals.create',compact('restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MealRequest $request)
    {
        $data = $request->all();
        $new_meal = new Meal();
        $new_meal->fill($data);
        $new_meal->save();
        return redirect()->route('admin.restaurants.show',$new_meal->restaurant_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meal=Meal::find($id);
        return view('admin.meals.edit', compact('meal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MealRequest $request, Meal $meal)
    {
        $data = $request->all();
        $meal->update($data);
        return redirect()->route('admin.restaurants.show',$meal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        $meal->delete();
        return redirect()->route('admin.restaurants.show',$meal->restaurant_id)->with('deleted', $meal->name);
    }
}
