<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria del producto');
            $table->string('nombre_pro')->comment('Nombre del producto');
            $table->float('precio_pro')->comment('Precio del producto');
            $table->integer('stock_pro')->unsigned()->comment('Stock del producto');
            $table->unsignedBigInteger('id_sucursal')->comment('Llave foránea en la tabla sucursales');
            $table->unsignedBigInteger('id_proveedor')->comment('Llave foránea en la tabla proveedores');
            $table->timestamps();

            $table->foreign('id_sucursal')->references('id')->on('sucursales');
            $table->foreign('id_proveedor')->references('id')->on('proveedores');
            $table->unique(['nombre_pro']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
