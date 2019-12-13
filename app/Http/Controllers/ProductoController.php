<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use App\Marca;
use App\Memoria;
use App\Disco;
use App\Pantalla;
use App\Procesador;

class ProductoController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $marcas = Marca::all();
    $memorias = Memoria::all();
    $procesadores = Procesador::all();
    $discos = Disco::all();
    $pantallas = Pantalla::all();
    $productos =  Producto::paginate(9);

    $vac = compact("marcas", "memorias", "procesadores", "discos", "pantallas", "productos");

    return view('productos.list', $vac);
  }

  public function search(Request $request){
    $marcas = Marca::all();
    $memorias = Memoria::all();
    $procesadores = Procesador::all();
    $discos = Disco::all();
    $pantallas = Pantalla::all();
    $arrayMarcas = [];
    $arrayMemorias = [];
    $arrayProcesadores = [];
    $arrayDiscos = [];
    $arrayPantallas = [];

    $query = Producto::query();

    foreach ($marcas as $marca) {
      if(isset($request[$marca->descripcion])){

        array_push($arrayMarcas, $marca->id);
        // $arrayMarcas[]+=$marca->id;
      }
    }

    if (count($arrayMarcas)){
      $query = $query->whereIn("id_marca", $arrayMarcas);
    }

    foreach ($memorias as $memoria) {
      if(isset($request[$memoria->descripcion])){
        array_push($arrayMemorias, $memoria->id);
        // $arrayMemorias[]+=$memoria->id;
      }
    }

    if (count($arrayMemorias)){
      $query = $query->whereIn("id_memoria", $arrayMemorias);
    }
    foreach ($procesadores as $procesador) {
      if(isset($request[$procesador->descripcion])){
        array_push($arrayProcesadores, $procesador->id);
        // $arrayProcesadores[]+=$procesador->id;
      }
    }


    if (count($arrayProcesadores)){
      $query = $query->whereIn("id_procesador", $arrayProcesadores);
    }
    foreach ($discos as $disco) {
      if(isset($request[$disco->descripcion])){
        array_push($arrayDiscos, $disco->id);
        // $arrayDiscos[]+=$disco->id;
      }

    }

    if (count($arrayDiscos)){
      $query = $query->whereIn("id_disco", $arrayDiscos);
    }
    foreach ($pantallas as $pantalla) {
      if(isset($request[$pantalla->descripcion])){
        array_push($arrayPantallas, $pantalla->id);
        // $arrayPantallas[]+=$pantalla->id;
      }
    }

    if (count($arrayPantallas)){
      $query = $query->whereIn("id_pantalla", $arrayPantallas);
    }




    $productos = $query->paginate(9);
    // dd($productos);
    $vac = compact('productos', "marcas", "memorias", "procesadores", "discos", "pantallas");
    return view('productos.list', $vac);

  }
  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  /*AÑADIR PRODUCTOS */
  public function create()
  {

    $marcas = Marca::all();
    $memorias = Memoria::all();
    $procesadores = Procesador::all();
    $discos = Disco::all();
    $pantallas = Pantalla::all();
    $vac = compact("marcas", "memorias", "procesadores", "discos", "pantallas");
    return view('productos.add', $vac);
  }


  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */

  public function store(Request $request)
  {
    $producto = new Producto();

    $ruta = $request->file("imagen")->store("public");
    $nombreArchivo = basename($ruta);

    $reglas = [
      "modelo" => "required|max:250",
      "precio" => "required|numeric",
      "descripcion" => "max:300",
      "stock" => "required|numeric"
    ];
    $this->validate($request, $reglas);
    $producto->modelo = $request["modelo"];
    $producto->precio = $request["precio"];
    $producto->stock = $request["stock"];
    $producto->descripcion = $request["descripcion"];
    $producto->id_marca = $request["marca"];
    $producto->id_memoria = $request["memoria"];
    $producto->id_pantalla = $request["pantalla"];
    $producto->id_disco = $request["disco"];
    $producto->id_procesador = $request["procesador"];
    $producto->imagen = $nombreArchivo;


    $producto->save();

    return redirect("/productos/$producto->id");

  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Producto  $producto
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $producto = Producto::find($id);
    return view('productos.show',compact('producto'));
  }

  public function showCompra($id)
  {
    $producto = Producto::find($id);
    return view('carrito',compact('producto'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Producto  $producto
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $producto = Producto::find($id);
    $marcas = Marca::all();
    $memorias = Memoria::all();
    $procesadores = Procesador::all();
    $discos = Disco::all();
    $pantallas = Pantalla::all();
    $vac = compact("producto", "marcas", "memorias", "procesadores", "discos", "pantallas");
    return view('productos.edit', $vac);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Producto  $producto
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    $producto = Producto::find($id);

    $ruta = $request->file("imagen")->store("public");
    $nombreArchivo = basename($ruta);

    $reglas = [
      "modelo" => "required|max:250",
      "precio" => "required|numeric",
      "descripcion" => "max:300",
      "stock" => "required|numeric"
    ];
    $this->validate($request, $reglas);
    $producto->modelo = $request["modelo"];
    $producto->precio = $request["precio"];
    $producto->stock = $request["stock"];
    $producto->descripcion = $request["descripcion"];
    $producto->id_marca = $request["marca"];
    $producto->id_memoria = $request["memoria"];
    $producto->id_pantalla = $request["pantalla"];
    $producto->id_disco = $request["disco"];
    $producto->id_procesador = $request["procesador"];
    $producto->imagen = $nombreArchivo;

    $producto->save();

    return redirect("productos/$producto->id");

  }



  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Producto  $producto
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $producto = Producto::find($id);
    $producto->delete();
    return redirect('/productos');
  }
}
