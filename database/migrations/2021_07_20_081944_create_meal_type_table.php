<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('meal_type');
        Schema::create('meal_type', function (Blueprint $table) {
            $table->id();

            //mi creo la colonna da collegare alla tabella types
            $table->unsignedBigInteger('type_id');

            //collego la foreign key all'id della tabella types
            $table->foreign('type_id')
                ->references('id')
                ->on('types')
                ->onDelete('cascade');

            //mi creo la colonna per la fk riferita alla tabella meals
            $table->unsignedBigInteger('meal_id');

            //collego la fk all'id della tabella meals
            $table->foreign('meal_id')
                ->references('id')
                ->on('meals')
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
        Schema::dropIfExists('meal_type');
    }
}
