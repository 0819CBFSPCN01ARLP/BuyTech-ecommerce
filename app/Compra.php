<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
  public $table = "compras";
  public $guarded = [];

  public function user(){
    return $this->belongsTo('App\User', 'id_usuario');
  }

  public function producto_compra(){
    return $this->hasMany('App\ProductoCompra', 'id_compra');
  }
  public function productos(){
    return $this->belongsToMany('App\Producto', 'producto_compra', 'id_compra', 'id_producto');
  }
}
