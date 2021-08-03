<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fishing_gears', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fishing_gears', function (Blueprint $table) {
            $table->removeColumn('user_id');
           
        });
    }
}
