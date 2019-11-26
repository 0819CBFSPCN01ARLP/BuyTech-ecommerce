<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesadores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->longText('descripcion');
            $table->softDeletes();
        });
        Schema::table('productos',function(Blueprint $table){
          $table->bigInteger('id_procesador')->unsigned();
          $table->foreign('id_procesador')->references('id')->on('procesadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('procesadores');
        Schema::enableForeignKeyConstraints();
    }
}
