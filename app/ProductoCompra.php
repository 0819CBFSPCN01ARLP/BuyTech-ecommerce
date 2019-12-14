<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductoCompra extends Pivot
{
  public $table = "producto_compra";
  public $guarded = [];

  public function compra(){
    return $this->belongsTo('App\Compra', 'id_compra');
  }
  public function producto(){
    return $this->belongsTo('App\Producto', 'id_producto');
  }
}
