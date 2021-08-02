<?php

use App\Meal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* for ($i=0; $i < 10; $i++) {
            $new_meal= new Meal();
            $new_meal->name='name ' . ($i+1);
            $new_meal->description='Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores corporis, temporibus dolores amet eius voluptatum illum natus ducimus quidem omnis reprehenderit nam voluptate error fugiat voluptas laudantium unde consectetur? Description plate number ' . ($i+1);
            $new_meal->price= ($i+1);
            $new_meal->img= 'https://via.placeholder.com/150';
            $new_meal->available= rand(0,1);
            $new_meal->save();
        } */
        DB::table('meals')->insert([
            'restaurant_id'=>4,
            'name'=>'Lasagne',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores corporis, temporibus dolores amet eius voluptatum illum natus ducimus quidem omnis reprehenderit nam voluptate error fugiat voluptas laudantium unde consectetur? Description plate number 1',
            'price'=>12.30,
            'img'=>'https://via.placeholder.com/150',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>2,
            'name'=>'Tagliatelle',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores corporis, temporibus dolores amet eius voluptatum illum natus ducimus quidem omnis reprehenderit nam voluptate error fugiat voluptas laudantium unde consectetur? Description plate number 1',
            'price'=>8.15,
            'img'=>'https://via.placeholder.com/150',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>2,
            'name'=>'Risotto alla Milanese',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores corporis, temporibus dolores amet eius voluptatum illum natus ducimus quidem omnis reprehenderit nam voluptate error fugiat voluptas laudantium unde consectetur? Description plate number 1',
            'price'=>6.25,
            'img'=>'https://via.placeholder.com/150',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>1,
            'name'=>'Pennette al Salmone',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores corporis, temporibus dolores amet eius voluptatum illum natus ducimus quidem omnis reprehenderit nam voluptate error fugiat voluptas laudantium unde consectetur? Description plate number 1',
            'price'=>15.99,
            'img'=>'https://via.placeholder.com/150',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>5,
            'name'=>'Bistecca Fiorentina',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores corporis, temporibus dolores amet eius voluptatum illum natus ducimus quidem omnis reprehenderit nam voluptate error fugiat voluptas laudantium unde consectetur? Description plate number 1',
            'price'=>22.57,
            'img'=>'https://via.placeholder.com/150',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>3,
            'name'=>'Hamburger',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores corporis, temporibus dolores amet eius voluptatum illum natus ducimus quidem omnis reprehenderit nam voluptate error fugiat voluptas laudantium unde consectetur? Description plate number 1',
            'price'=>5.39,
            'img'=>'https://via.placeholder.com/150',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>1,
            'name'=>'Margherita',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores corporis, temporibus dolores amet eius voluptatum illum natus ducimus quidem omnis reprehenderit nam voluptate error fugiat voluptas laudantium unde consectetur? Description plate number 1',
            'price'=>4.59,
            'img'=>'https://via.placeholder.com/150',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>1,
            'name'=>'Diavola',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores corporis, temporibus dolores amet eius voluptatum illum natus ducimus quidem omnis reprehenderit nam voluptate error fugiat voluptas laudantium unde consectetur? Description plate number 1',
            'price'=>6.59,
            'img'=>'https://via.placeholder.com/150',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>3,
            'name'=>'cheeseburger',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores corporis, temporibus dolores amet eius voluptatum illum natus ducimus quidem omnis reprehenderit nam voluptate error fugiat voluptas laudantium unde consectetur? Description plate number 1',
            'price'=>12.39,
            'img'=>'https://via.placeholder.com/150',
            'available'=>rand(0,1),
        ]);
        DB::table('meals')->insert([
            'restaurant_id'=>1,
            'name'=>'Cacio e Pepe',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores corporis, temporibus dolores amet eius voluptatum illum natus ducimus quidem omnis reprehenderit nam voluptate error fugiat voluptas laudantium unde consectetur? Description plate number 1',
            'price'=>12.39,
            'img'=>'https://via.placeholder.com/150',
            'available'=>rand(0,1),
        ]);
    }
}
