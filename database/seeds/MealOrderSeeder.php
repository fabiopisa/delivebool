<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Meal;
use App\Order;

class MealOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meal_order')->insert([
            'meals_id'=>2,
            'order_id'=>1,
            'quantity'=>rand(1,5)
        ]);
        DB::table('meal_order')->insert([
            'meals_id'=>5,
            'order_id'=>1,
            'quantity'=>rand(1,5)
        ]);
        DB::table('meal_order')->insert([
            'meals_id'=>1,
            'order_id'=>5,
            'quantity'=>rand(1,5)
        ]);
        DB::table('meal_order')->insert([
            'meals_id'=>9,
            'order_id'=>3,
            'quantity'=>rand(1,5)
        ]);
        DB::table('meal_order')->insert([
            'meals_id'=>3,
            'order_id'=>2,
            'quantity'=>rand(1,5)
        ]);
    }
}
