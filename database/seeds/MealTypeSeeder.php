<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Meal;
use App\Type;


class MealTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for ($i=0; $i < 10; $i++) {

                DB::table('meal_type')->insert([
                'meal_id'=>Meal::inRandomOrder()->first()->id,
                'type_id'=>Type::inRandomOrder()->first()->id
            ]);

        }
    }
}
