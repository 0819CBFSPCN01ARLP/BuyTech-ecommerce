<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procesador extends Model
{
  public $table = "procesadores";
  public $guarded = [];

  public function producto(){
    return $this->hasMany("App\Producto", "id_procesador");
  }
}
