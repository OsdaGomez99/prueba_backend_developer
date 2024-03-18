<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria del cliente');
            $table->integer('rut_cliente')->unsigned()->comment('Número de RUT del cliente');
            $table->string('nombre_cliente')->comment('Nombre del cliente');
            $table->string('apellido_cliente')->comment('Apellido del cliente');
            $table->string('dir_cliente')->comment('Dirección del cliente');
            $table->string('tel_cliente')->comment('Teléfono del cliente');
            $table->string('pais_cliente')->comment('País origen del cliente');
            $table->timestamps();

            $table->unique(['rut_cliente']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
