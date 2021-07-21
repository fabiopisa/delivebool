<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {
            $new_order= new Order();
            $new_order->price= (($i+1)*9.4);
            $new_order->save();
        }
    }
}
