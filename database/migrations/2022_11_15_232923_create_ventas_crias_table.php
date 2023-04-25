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
        Schema::create('ventas_crias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('crias_id')->comment('Relacion de la venntas con crias')->constrained();
            $table->foreignId('ventas_id')->comment('Relacion de la ventas con ventas')->constrained();
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
        Schema::dropIfExists('ventas_crias');
    }
};
