<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* for ($i=0; $i < 3; $i++) {
            $new_user = new User();
            $new_user -> name="NomeTitolare " . ($i+1);
            $new_user -> surname="CognomeTitolare " . ($i+1);
            $new_user -> email="emailTitolare" . ($i+1) . "@gmail.com";
            //$new_user -> email_verified_at=date('1-1-2020') ;
            $new_user -> password=Hash::make("passwordT" . ($i+1));
            $new_user -> pIva= ($i+1) . '1234567895';
            $new_user -> save();
        } */
        DB::table('users')->insert([
            'name'=>'Franco',
            'surname'=>'Bianchi',
            'email'=>'francobianchi@gmail.com',
            'password'=>Hash::make('francobianchi'),
            'pIva'=>'12345678932',
        ]);
        DB::table('users')->insert([
            'name'=>'Giovanni',
            'surname'=>'Castucci',
            'email'=>'giovannicastucci@gmail.com',
            'password'=>Hash::make('giovannicastucci'),
            'pIva'=>'12345678938',
        ]);
        DB::table('users')->insert([
            'name'=>'Lorenzo',
            'surname'=>'Verdi',
            'email'=>'lorenzoverdi@gmail.com',
            'password'=>Hash::make('lorenzoverdi'),
            'pIva'=>'12345678934',
        ]);
    }
}
