<?php

use App\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateCustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('customers')->update([
            'order_id'=>1,
        ]);
        DB::table('customers')->update([
            'order_id'=>2,
        ]);
        DB::table('customers')->update([
            'order_id'=>3,
        ]);
        DB::table('customers')->update([
            'order_id'=>4,
        ]);
        DB::table('customers')->update([
            'order_id'=>5,
        ]);
        DB::table('customers')->update([
            'order_id'=>6,
        ]); */
        $customers= Customer::all(); 
        $counter=1;
        foreach ($customers as $customer) {
           
            $data=[
                'order_id' => $counter++
            ];
            $customer->update($data);
        }
    }
}
