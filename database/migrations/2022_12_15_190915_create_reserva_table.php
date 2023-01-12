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
        Schema::create('reserva', function (Blueprint $table) {
           /*  $table->id();
            $table->string("nombre");
            $table->string("apellido");
            $table->string("hora");
            $table->string("persona");
            $table->string("tel");
            $table->string("email");
            $table->string("tarjeta");
            $table->string("fecha");
            $table->timestamps(); */

            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_cliente")->nullable();
            $table->unsignedBigInteger("id_invitado")->nullable();
            $table->unsignedBigInteger("id_menu");
            $table->unsignedBigInteger("id_mesa");
            $table->unsignedBigInteger("fecha_reserva");
            $table->string("num_tarjeta");
            $table->integer("num_personas");
            $table->timestamps();

            $table->foreign("id_cliente")->references('id')->on('users')->onDelete('cascade');
            $table->foreign("id_invitado")->references('id')->on('invitados')->onDelete('cascade');
            $table->foreign("id_menu")->references('id')->on('menus')->onDelete('cascade');
            $table->foreign("id_mesa")->references('id')->on('mesas')->onDelete('cascade');
            $table->foreign("fecha_reserva")->references('id')->on('horarios')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
};
