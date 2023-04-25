<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificacion_carnes', function (Blueprint $table) {
            $table->id();
            $table->integer('type')->unique()->comment('1: Grasa Tipo 1, 2: Grasa Tipo 2');
            $table->string('name')->comment('Nombre con el que se identifica la clasificación de carne');
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
        Schema::dropIfExists('clasificacion_carnes');
    }
};
