<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria de la venta');
            $table->unsignedBigInteger('id_vendedor')->comment('Llave foránea en la tabla vendedores');
            $table->unsignedBigInteger('id_cliente')->comment('Llave foránea en la tabla clientes');
            $table->unsignedBigInteger('id_sucursal')->comment('Llave foránea en la tabla sucursales');
            $table->date('fecha_venta')->comment('Fecha de la venta');
            $table->float('monto_total')->comment('Monto total de la venta');
            $table->timestamps();

            $table->foreign('id_vendedor')->references('id')->on('vendedores');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_sucursal')->references('id')->on('sucursales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
