<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  public $table = "productos";
  public $guarded = [];

  protected $fillable = [
      'modelo', 'precio', 'stock', 'descripcion', 'marca', 'memoria', 'procesador', 'disco', 'pantalla'
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
}
