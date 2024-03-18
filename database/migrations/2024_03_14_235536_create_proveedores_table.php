<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria del vendedor');
            $table->integer('rut_prov')->unsigned()->comment('Número de RUT del vendedor');
            $table->string('nombre_prov')->comment('Nombre del proveedor');
            $table->string('dir_prov')->comment('Dirección del proveedor');
            $table->string('tel_prov')->comment('Teléfono del proveedor');
            $table->string('pagina_web')->comment('Página web del proveedor');
            $table->string('pais_prov')->comment('País origen del proveedor');
            $table->timestamps();

            $table->unique(['rut_prov']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
