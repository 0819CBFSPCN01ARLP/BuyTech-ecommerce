<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
  public $table = "marcas";
  public $guarded = [];

  public function producto(){
    return $this->hasMany("App\Producto", "id_marca");
  }
}
