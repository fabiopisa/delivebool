<?php

use Illuminate\Database\Seeder;
use App\Order;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* for ($i=0; $i < 5; $i++) {
            $new_order= new Order();
            $new_order->price= (($i+1)*9.4);
            $new_order->save();
        } */
        DB::table('orders')->insert([
            'customer_id'=>1,
            'restaurant_id'=>2,
            'price'=>14.45
        ]);
        DB::table('orders')->insert([
            'customer_id'=>2,
            'restaurant_id'=>5,
            'price'=>22.57
        ]);
        DB::table('orders')->insert([
            'customer_id'=>3,
            'restaurant_id'=>3,
            'price'=>12.39
        ]);
        DB::table('orders')->insert([
            'customer_id'=>4,
            'restaurant_id'=>2,
            'price'=>6.25
        ]);
        DB::table('orders')->insert([
            'customer_id'=>5,
            'restaurant_id'=>1,
            'price'=>11.18
        ]);
        DB::table('orders')->insert([
            'customer_id'=>6,
            'restaurant_id'=>4,
            'price'=>12.30
        ]);
    }
}
