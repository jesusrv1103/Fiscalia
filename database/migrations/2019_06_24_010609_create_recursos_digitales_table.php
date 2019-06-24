<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursosDigitalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recursos_digitales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->mediumText('descripcion');
            $table->string('archivo');
            $table->unsignedInteger('categoria_id');
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
        Schema::dropIfExists('recursos_digitales');
    }
}
