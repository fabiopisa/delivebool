<?php

use Illuminate\Database\Seeder;
use App\Restaurant;
use App\User;

class UpdateRestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants= Restaurant::all();
        /* creo una variabile restaurants che conterrà tutti i model presenti nel database di tipo restaurant */

        foreach ($restaurants as $restaurant) {

            $data=[
                'user_id'=>User::inRandomOrder()->first()->id
            ];
            $restaurant->update($data);
        }
    }
}
