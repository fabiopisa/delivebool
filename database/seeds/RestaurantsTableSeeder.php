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
      $arrRestaurant=[];

      $arrRestaurant.require('../../config/restaurants.php');

        foreach ($arrRestaurant as $restaurant){
            $new_restaurant = new Restaurant();
            $new_restaurant->name=$restaurant['name'];
            $new_restaurant->slug=Str::slug($new_restaurant->name);
            $new_restaurant->address=$restaurant['address'];
            $new_restaurant->save();
        }

    }
}
