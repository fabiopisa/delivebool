<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('category_restaurant');
        Schema::create('category_restaurant', function (Blueprint $table) {
            $table->id();

             //mi creo la colonna per la foreign key della tabella categories
             $table->unsignedBigInteger('category_id');

             //mi collego la fk alla tabella categories
             $table->foreign('category_id')
                 ->references('id')
                 ->on('categories')
                 ->onDelete('cascade');
 
             //creo la colonna per la foreign key della tabella restaurants
             $table->unsignedBigInteger('restaurant_id');

             //mi collego la fk alla tabella restaurants
             $table->foreign('restaurant_id')
                 ->references('id')
                 ->on('restaurants')
                 ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_restaurant');
    }
}
