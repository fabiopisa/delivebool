<?php

use App\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* for ($i=0; $i < 5; $i++) {
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
        } */
        DB::table('customers')->insert([
            /* 'order_id'=>1, */
            'name'=>'Fabio',
            'surname'=>'Pisanelli',
            'email'=>'fabiopisanelli@gmail.com',
            'telephone'=>'3365894455',
            'address'=>'Via Milano',
            'city'=>'Milano',
            'cap'=>'20021',
            'house_num'=>25,
            'intern'=>'A18',
        ]);
        DB::table('customers')->insert([
            /* 'order_id'=>2, */
            'name'=>'Giuseppe',
            'surname'=>'Napoli',
            'email'=>'giuseppenapoli@gmail.com',
            'telephone'=>'3365894458',
            'address'=>'Via Trentino',
            'city'=>'Milano',
            'cap'=>'20021',
            'house_num'=>76,
            'intern'=>'B2',
        ]);
        DB::table('customers')->insert([
            /* 'order_id'=>3, */
            'name'=>'Gianni',
            'surname'=>'Campana',
            'email'=>'giannicampana@gmail.com',
            'telephone'=>'3365894496',
            'address'=>'Strada San Paolo',
            'city'=>'Milano',
            'cap'=>'20021',
            'house_num'=>2,
            'intern'=>'C9',
        ]);
        DB::table('customers')->insert([
            /* 'order_id'=>4, */
            'name'=>'Luca',
            'surname'=>'Logallo',
            'email'=>'lucalogallo@gmail.com',
            'telephone'=>'3365896579',
            'address'=>'Via Matera',
            'city'=>'Milano',
            'cap'=>'20021',
            'house_num'=>88,
            'intern'=>'A1',
        ]);
        DB::table('customers')->insert([
            /* 'order_id'=>5, */
            'name'=>'Leopoldo',
            'surname'=>'Nanti',
            'email'=>'leopoldonanti@gmail.com',
            'telephone'=>'3365894455',
            'address'=>'Via Padova',
            'city'=>'Milano',
            'cap'=>'20021',
            'house_num'=>99,
            'intern'=>'A88',
        ]);
        DB::table('customers')->insert([
            /* 'order_id'=>6, */
            'name'=>'Alessandro',
            'surname'=>'Freschi',
            'email'=>'alessandrofreschi@gmail.com',
            'telephone'=>'3365893268',
            'address'=>'Via Alessandria',
            'city'=>'Milano',
            'cap'=>'20021',
            'house_num'=>8,
            'intern'=>'b14',
        ]);

    }
}
