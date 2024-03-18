<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedores', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria del vendedor');
            $table->integer('rut_ven')->unsigned()->comment('Número de RUT del vendedor');
            $table->string('nombre_ven')->comment('Nombre del vendedor');
            $table->string('apellido_ven')->comment('Apellido del vendedor');
            $table->string('dir_ven')->comment('Dirección del vendedor');
            $table->string('tel_ven')->comment('Teléfono del vendedor');
            $table->date('fecha_na_ven')->comment('Fecha de nacimiento del vendedor');
            $table->string('email_ven')->comment('Email del vendedor');
            $table->string('pais_ven')->comment('País origen del vendedor');
            $table->timestamps();

            $table->unique(['rut_ven']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendedores');
    }
}
