<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Restaurant;

class CategoryRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {
            DB::table('category_restaurant')->insert([
                'category_id'=>Category::inRandomOrder()->first()->id,
                'restaurant_id'=>Restaurant::inRandomOrder()->first()->id,
            ]);
        }
    }
}
