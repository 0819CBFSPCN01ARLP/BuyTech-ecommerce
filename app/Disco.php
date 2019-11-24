<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
  public function producto(){
    return $this->hasMany("App\Producto", "id_disco");
  }
}
