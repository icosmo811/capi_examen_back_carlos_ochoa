<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserDomicilio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_domicilio', function (Blueprint $table)) {
            $table->id('user_id');
            $table->string('domicilio');
            $table->string('numero_exterior');
            $table->string('colonia');
            $table->integer('cp');
            $table->string('ciudad');
            $table->timestamps();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('user_domicilio');
    }
}
