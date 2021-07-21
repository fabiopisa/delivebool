<?php

use Illuminate\Database\Seeder;
use App\Meal;
use Symfony\Component\VarDumper\Cloner\Data;
use App\Restaurant;

class UpdateMealsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meals= Meal::all();
        foreach ($meals as $meal) {
            $data=[
                'restaurant_id' =>Restaurant::inRandomOrder()->first()->id
            ];
            $meal->update($data);
        }
    }
}
