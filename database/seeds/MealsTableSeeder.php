<?php

use App\Meal;
use Illuminate\Database\Seeder;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            $new_meal= new Meal();
            $new_meal->name='name ' . ($i+1);
            $new_meal->description='Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores corporis, temporibus dolores amet eius voluptatum illum natus ducimus quidem omnis reprehenderit nam voluptate error fugiat voluptas laudantium unde consectetur? Description plate number ' . ($i+1);
            $new_meal->price= ($i+1);
            $new_meal->img= 'https://via.placeholder.com/150';
            $new_meal->available= rand(0,1);
            $new_meal->save();
        }
    }
}
