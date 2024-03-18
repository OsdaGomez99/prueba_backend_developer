<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_productos', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria del tabla pivote');
            $table->unsignedBigInteger('cliente_id')->comment('Llave foránea en la tabla clientes');
            $table->unsignedBigInteger('producto_id')->comment('Llave foránea en la tabla productos');
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('producto_id')->references('id')->on('productos');

            $table->unique(['cliente_id', 'producto_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente_productos');
    }
}
