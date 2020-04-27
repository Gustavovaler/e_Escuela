<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
         
            $table->engine = 'InnoDB';
            $table->id();
            $table->timestamps();
            $table->char('nombre', 200);
            $table->integer('numero')->default(null);
            $table->integer('numero_distrito')->default(null);
            $table->char('ciudad', 200)->default(null);
            $table->char('provincia', 50)->default(null);
            $table->char('direccion', 200)->default(null);
            $table->char('telefono', 30)->default(null);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimientos');
    }
}
