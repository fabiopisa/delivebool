<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= [
            'Vegano',
            'Senza Lattosio',
            'Celiaco',
            'Vegetariano',
            'Senza Glutine',
        ];
            foreach ($data as $item){
                
                $new_type = new Type();
                $new_type -> name=$item;
                $new_type -> save();

            };
    }
}
