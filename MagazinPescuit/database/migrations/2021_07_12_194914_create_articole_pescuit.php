<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticolePescuit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articole_pescuit', function (Blueprint $table) {
            $table->id();
            $table->string('Categorie');
            $table->string('Producator');
            $table->string('Model');
            $table->integer('Pret');
            $table->text('Descriere');
            $table->string('Disponibilitate');
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
        Schema::dropIfExists('articole_pescuit');
    }
}
