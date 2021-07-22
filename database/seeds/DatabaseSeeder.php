<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            OwnersTableSeeder::class,
            RestaurantsTableSeeder::class,
            TypesTableSeeder::class,
            UpdateRestaurantsSeeder::class,
            MealsTableSeeder::class,
            UpdateMealsSeeder::class,
            MealTypeSeeder::class,
            CategoryRestaurantSeeder::class,
            OrdersTableSeeder::class,
            MealOrderSeeder::class,
            CustomersTableSeeder::class,
            UpdateOrdersSeeder::class

        ]);
    }
}
