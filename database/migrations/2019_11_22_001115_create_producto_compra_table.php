<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_compra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cantidad');
            $table->bigInteger('precio');
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_compra');
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->foreign('id_compra')->references('id')->on('compras');
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
        Schema::dropIfExists('producto_compra');
    }
}
