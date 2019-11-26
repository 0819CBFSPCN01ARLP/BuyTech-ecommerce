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
      $productos =  Producto::paginate(9);
      return view('productos.list',compact('productos'));
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
