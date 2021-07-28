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
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            RestaurantsTableSeeder::class,
            UpdateRestaurantsSeeder::class,
            TypesTableSeeder::class,
            MealsTableSeeder::class,
            UpdateMealsSeeder::class,
            MealTypeSeeder::class,
            CategoryRestaurantSeeder::class,
            OrdersTableSeeder::class,
            MealOrderSeeder::class,
            CustomersTableSeeder::class,
            UpdateOrdersSeeder::class,
            UpdateCustomersSeeder::class
        ]);
    }
}
