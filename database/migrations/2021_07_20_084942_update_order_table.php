<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {

            //creo la colonna per la fk legata alla tabella customers
            $table->unsignedBigInteger('customer_id')->after('id');

            //collego la fk alla tabella customer
            $table->foreign('customer_id')
                ->references('id')
                ->on('customers')
                ->onDelete('cascade');
            
            //creo la colonna per la fk legata alla tabella restaurants
            $table->unsignedBigInteger('restaurant_id')->after('customer_id');
            
            //collego al fk alla tabella restaurants
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
        Schema::table('order', function (Blueprint $table) {

            // 1 elimino la FK legata al restaurant
            $table->dropForeign(['restaurant_id']);
            // 2 elimino la colonna legata al restaurant
            $table->dropColumn('restaurant_id');

            //elimino al fk legata al customer
            $table->dropForeign(['customer_id']);
            //elimino la colonna legata al customer
            $table->dropColumn('customer_id');

        });
    }
}
