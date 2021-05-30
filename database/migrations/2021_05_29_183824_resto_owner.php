<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RestoOwner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            
           // $table->unsignedBigInteger('manager_id');

            //$table->foreign('manager_id');
            $table->foreignId('manager_id')->references('id')->on('managers')->onUpdate('cascade')->onDelete('cascade');

            //
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
            
            $table->dropForeign('restaurants_manager_id_foreign');
            $table->dropColumn('manager_id');
            //
        });
    }
}
