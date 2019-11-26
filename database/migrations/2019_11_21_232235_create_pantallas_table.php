<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePantallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pantallas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->longText('descripcion');
            $table->softDeletes();

        });
        Schema::table('productos',function(Blueprint $table){
            $table->bigInteger('id_pantalla')->unsigned();
            $table->foreign('id_pantalla')->references('id')->on('pantallas');
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
        Schema::dropIfExists('pantallas');
        Schema::enableForeignKeyConstraints();
    }
}
