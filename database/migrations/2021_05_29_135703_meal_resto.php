<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MealResto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meals', function (Blueprint $table) {
            
            //$table->unsignedBigInteger('restaurant_id');

            $table->unsignedBigInteger('restaurant_id')->references('id')->on('restaurants')->onUpdate('cascade')->onDelete('cascade');

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
            
            $table->dropForeign('meals_restaurant_id_foreign');
            $table->dropColumn('restaurant_id');
            
        });
    }
}
