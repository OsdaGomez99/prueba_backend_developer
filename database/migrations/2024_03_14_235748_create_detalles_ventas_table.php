<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_ventas', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria de detalle de venta');
            $table->unsignedBigInteger('id_venta')->comment('Llave foránea en la tabla ventas');
            $table->unsignedBigInteger('id_producto')->comment('Llave foránea en la tabla productos');
            $table->integer('cantidad')->unsigned()->comment('Cantidad del producto del detalle de venta');
            $table->float('precio_unitario')->comment('Precio unitario por producto');
            $table->float('subtotal')->comment('Resultado de cantidad de productos * productos ');
            $table->timestamps();

            $table->foreign('id_venta')->references('id')->on('ventas');
            $table->foreign('id_producto')->references('id')->on('productos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_ventas');
    }
}
