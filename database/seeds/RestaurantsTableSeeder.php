<?php

use App\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        /* for ($i=0; $i < 5; $i++) {

            $new_restaurant = new Restaurant();
            $new_restaurant->name= "restaurant " . ($i+1);
            $new_restaurant->slug=Str::slug($new_restaurant->name);
            $new_restaurant->address= "address " . ($i+1);
            $new_restaurant->save();

        } */
        DB::table('restaurants')->insert([
            'user_id'=>1,
            'name'=>'Route 66',
            'slug'=>Str::slug('route 66'),
            'address'=>'Via Dei Pascoli 56',
        ]);
        DB::table('restaurants')->insert([
            'user_id'=>2,
            'name'=>'Bel Vedere',
            'slug'=>Str::slug('Bel Vedere'),
            'address'=>'Via Monti di Siena 89',
        ]);
        DB::table('restaurants')->insert([
            'user_id'=>3,
            'name'=>'Mangia e Bevi',
            'slug'=>Str::slug('Mangia e Bevi'),
            'address'=>'Via san Giovanni 12',
        ]);
        DB::table('restaurants')->insert([
            'user_id'=>2,
            'name'=>'Da Giovanni',
            'slug'=>Str::slug('Da Giovanni'),
            'address'=>'Via Roma 96',
        ]);
        DB::table('restaurants')->insert([
            'user_id'=>3,
            'name'=>'Tonnarello',
            'slug'=>Str::slug('Tonnarello'),
            'address'=>'Via Trastevere 2',
        ]);
    }
}
