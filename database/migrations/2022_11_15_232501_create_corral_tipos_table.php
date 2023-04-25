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
        Schema::create('corral_tipos', function (Blueprint $table) {
            $table->id();
            $table->integer('type')->unique()->comment('Tipo de corral, 1: General, 2: Cuarentena');
            $table->string('name')->comment('Nombre de tipo de corral');
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
        Schema::dropIfExists('corral_tipos');
    }
};
