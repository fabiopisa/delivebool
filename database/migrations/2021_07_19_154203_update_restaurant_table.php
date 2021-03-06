<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table){
            //mi creo la colonna per il collegamento della tabella restaurants con la tabella owners


            $table->unsignedBigInteger('user_id')->nullable()->after('id');


            //collego la fk con la tabella owners
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {

            // 1 elimino la FK
            $table->dropForeign(['user_id']);

            // 2 elimino la colonna
            $table->dropColumn('user_id');
        });
    }
}
