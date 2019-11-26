<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->longText('descripcion');
            $table->softDeletes();
        });

        Schema::table('productos',function(Blueprint $table){
        $table->bigInteger('id_memoria')->unsigned();
        $table->foreign('id_memoria')->references('id')->on('memorias');
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
      Schema::dropIfExists('memorias');
      Schema::enableForeignKeyConstraints();
    }
}
