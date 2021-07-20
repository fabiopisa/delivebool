<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meals', function (Blueprint $table) {

            //creo la colonna che conterrà la fk collegata alla tabella dei restaurants
            $table->unsignedBigInteger('restaurant_id')->after('id');

            //mi collego la fk creata nella tabella meals all'id della tabella restaurant
            $table->foreign('restaurant_id')
                ->references('id')
                ->on('restaurants')
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
        Schema::table('meals', function (Blueprint $table) {

            // 1 elimino la FK
            $table->dropForeign(['restaurant_id']);
            // 2 elimino la colonna
            $table->dropColumn('restaurant_id');
        });
    }
}
