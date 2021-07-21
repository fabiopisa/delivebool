<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {
            $new_customer= new Customer();
            $new_customer->name='cliente ' . ($i+1);
            $new_customer->surname='cognome ' . ($i+1);
            $new_customer->email='emailCliente' . ($i+1) . '@gmail.com';
            $new_customer->telephone='378956473' . ($i+1);
            $new_customer->address='via Roma';
            $new_customer->city='Milano';
            $new_customer->cap='20021';
            $new_customer->house_num=($i+4);
            $new_customer->intern='A' . ($i+7);
            $new_customer->save();
        }
    }
}
