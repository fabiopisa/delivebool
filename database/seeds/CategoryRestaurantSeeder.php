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
        /* for ($i=0; $i < 5; $i++) {
            DB::table('category_restaurant')->insert([
                'category_id'=>Category::inRandomOrder()->first()->id,
                'restaurant_id'=>Restaurant::inRandomOrder()->first()->id,
            ]);
        } */
        DB::table('category_restaurant')->insert([
            'category_id'=>1,
            'restaurant_id'=>1,
        ]);
        DB::table('category_restaurant')->insert([
            'category_id'=>8,
            'restaurant_id'=>1,
        ]);
        DB::table('category_restaurant')->insert([
            'category_id'=>12,
            'restaurant_id'=>2,
        ]);
        DB::table('category_restaurant')->insert([
            'category_id'=>9,
            'restaurant_id'=>3,
        ]);
        DB::table('category_restaurant')->insert([
            'category_id'=>11,
            'restaurant_id'=>4,
        ]);
        DB::table('category_restaurant')->insert([
            'category_id'=>1,
            'restaurant_id'=>5,
        ]);
        DB::table('category_restaurant')->insert([
            'category_id'=>12,
            'restaurant_id'=>5,
        ]);
    }
}
