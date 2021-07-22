<?php


use App\Order;
use App\Customer;
use App\Restaurant;
use Illuminate\Database\Seeder;

class UpdateOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders=Order::all();

        foreach ($orders as $order) {

            $data=[
                'customer_id'=>Customer::inRandomOrder()->first()->id,
                'restaurant_id'=>Restaurant::inRandomOrder()->first()->id
            ];
            $order->update($data);
        }
    }
}
