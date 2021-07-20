<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= [
            'Italiano',
            'Giapponese',
            'Cinese',
            'Thailandese',
            'Messiicano',
            'Greco',
            'Indiano',
            'Pizzeria',
            'Humburgeria',
            'Piadineria',
            'Trattoria',
            'Rosticceria'
        ];
            foreach ($data as $item){
                
                $new_category = new Category();
                $new_category -> name=$item;
                $new_category -> save();

            };
            
        

    }
}
