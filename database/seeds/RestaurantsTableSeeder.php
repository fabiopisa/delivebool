<?php

use App\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;



class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        for ($i=0; $i < 5; $i++) {

            $new_restaurant = new Restaurant();
            $new_restaurant->name= "restaurant " . ($i+1);
            $new_restaurant->slug=Str::slug($new_restaurant->name);
            $new_restaurant->address= "address " . ($i+1);
            $new_restaurant->save();

        }

    }
}
