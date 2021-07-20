<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_order', function (Blueprint $table) {
            $table->id();
            
            //creo la colonna che collego alla tabella meals per la fk
            $table->unsignedBigInteger('meals_id');

            //collego la colonna che ho creato per la fk della tabella meals all'id della tabella meals
            $table->foreign('meals_id')
                ->references('id')
                ->on('meals')
                ->onDelete('cascade');

            //creo la colonna che collego alla tabella order
            $table->unsignedBigInteger('order_id');

            //collego al colonna che ho creato per la fk della tabella all'id della tabella order
            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->onDelete('cascade');
            

            $table->integer('quantity');
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
        Schema::dropIfExists('meal_order');
    }
}
