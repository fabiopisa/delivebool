<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Meal;
use App\Restaurant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RestaurantRequest;
use Illuminate\Support\Str;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        $restaurants=Restaurant::all();
        return view('admin.restaurants.index', compact('restaurants','categories')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants= Restaurant::all();
        $categories = Category::all();
        return view('admin.restaurants.create',compact('categories','restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestaurantRequest $request)
    {
        $data = $request->all();
        $data['slug']=Str::slug($data['name'],'-');
        $slug_exsist=Restaurant::where('slug',$data['slug'])->first();
        $counter = 0;
        while($slug_exsist){
            $name=$data['name'] . "-" . $counter;
            $data['slug']=Str::slug($name,'-');
            $slug_exsist=Restaurant::where('slug',$data['slug'])->first();
            $counter++;
        }
        $new_restaurant = new Restaurant();
        $new_restaurant->fill($data);
        $new_restaurant->save();
        if(array_key_exists('categories',$data)){

            $new_restaurant->categories()->attach($data['categories']);
        }
        return redirect()->route('admin.restaurants.index',$new_restaurant);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meals=Meal::all();
        $restaurant=Restaurant::find($id);
        return view('admin.restaurants.show', compact('meals','restaurant'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant=Restaurant::find($id);
        $categories = Category::all();
        
        return view('admin.restaurants.edit', compact('restaurant','categories'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RestaurantRequest $request, Restaurant $restaurant)
    {
        $data = $request->all();
        if($restaurant->name === $data['name']){
            $data['slug'] = $restaurant->slug;
        }else{
            $data['slug']=Str::slug($data['name'],'-');
            $slug_exsist=Restaurant::where('slug',$data['slug'])->first();
            $counter = 0;
            while($slug_exsist){
                $name=$data['name'] . "-" . $counter;
                $data['slug']=Str::slug($name,'-');
                $slug_exsist=Restaurant::where('slug',$data['slug'])->first();
                $counter++;
            }
        }
        $restaurant->update($data);
        if(array_key_exists('categories',$data)){
            $restaurant->categories()->sync($data['categories']);
        }else{
            $restaurant->categories()->detach();
        }
        return redirect()->route('admin.restaurants.index',$restaurant);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect()->route('admin.restaurants.index')->with('deleted', $restaurant->name);
    }
}
