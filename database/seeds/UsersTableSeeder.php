<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) {
            $new_user = new User();
            $new_user -> name="NomeTitolare " . ($i+1);
            $new_user -> surname="CognomeTitolare " . ($i+1);
            $new_user -> email="emailTitolare" . ($i+1) . "@gmail.com";
            //$new_user -> email_verified_at=date('1-1-2020') ;
            $new_user -> password=Hash::make("passwordT" . ($i+1));
            $new_user -> pIva= ($i+1) . '1234567895';
            $new_user -> save();
        }
    }
}
