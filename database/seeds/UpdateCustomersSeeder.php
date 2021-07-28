<?php

use App\Customer;
use App\Order;
use Illuminate\Database\Seeder;

class UpdateCustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers= Customer::all();
        foreach ($customers as $customer) {
            $data=[
                'order_id' =>Order::inRandomOrder()->first()->id
            ];
            $customer->update($data);
        }
    }
}
