<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDelete;
class Producto extends Model
{
  public $table = "productos";
  public $guarded = [];

  protected $fillable = [
      'modelo', 'precio', 'stock', 'descripcion', 'marca', 'memoria', 'procesador', 'disco', 'pantalla', 'imagen'
  ];

  public function marca(){
    return $this->belongsTo("App\Marca", "id_marca");
  }
  public function memoria(){
    return $this->belongsTo("App\Memoria", "id_memoria");
  }
  public function procesador(){
    return $this->belongsTo("App\Procesador", "id_procesador");
  }
  public function disco(){
    return $this->belongsTo("App\Disco", "id_disco");
  }
  public function pantalla(){
    return $this->belongsTo("App\Pantalla", "id_pantalla");
  }
  public function imagen(){
    return $this->hasMany("App\Imagenes", "id_imagen");
  }
  public function compras(){
    return $this->belongsToMany('App\Compra', 'producto_compra', 'id_producto', 'id_compra');
  }
  public function producto_compra(){
    return $this->hasMany('App\ProductoCompra', 'id_producto');
  }
}
