<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pantalla extends Model
{
  public $table = "pantallas";
  public $guarded = [];

  public function producto(){
    return $this->hasMany("App\Producto", "id_pantalla");
  }
}
