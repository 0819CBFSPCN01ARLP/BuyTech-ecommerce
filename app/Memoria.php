<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memoria extends Model
{
  public $table = "memorias";
  public $guarded = [];

  public function producto(){
    return $this->hasMany("App\Producto", "id_memoria");
  }
}
