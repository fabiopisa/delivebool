<?php

use App\Owner;
use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 
            $new_owner = new Owner();
            $new_owner -> name="NomeTitolare " . ($i+1);
            $new_owner -> surname="CognomeTitolare " . ($i+1);
            $new_owner -> email="emailTitolare" . ($i+1) . "@gmail.com";
            $new_owner -> password="passwordT" . ($i+1);
            $new_owner -> pIva= $i+1;
            $new_owner -> save();
        }
    }
}
