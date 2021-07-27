<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Meal;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Restaurant;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant=Restaurant::find($id);
        $orders=DB::table('meals')
            ->join('meal_order','meal_order.meals_id','=','meals.id')
            ->join('orders','orders.id','=','meal_order.order_id')
            ->join('customers','customers.id','=','orders.customer_id')
            ->select('orders.*')
            ->get();
        /* dd($orders); */
        return view('admin.orders.show',compact('orders','restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
