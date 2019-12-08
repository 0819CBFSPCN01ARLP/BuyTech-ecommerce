<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    public function show($id)
    {
      $usuario = User::find($id);
      return view('profile', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $usuario = User::find($id);
      return view('editprofile', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $user = User::find($id);
      $reglas = [
        "nombre" => "required|max:40",
        "apellido" => "required|max:40",
        "email" => "required|max:100",
        "direccion" => "required|max:100",
        "celular" => "required|max:40",
        "codigo_postal" => "required|numeric|max:20",
        "ciudad" => "required|max:40",
        "provincia" => "required|max:40",
        "pais" => "required|max:40",

      ]
      $this->validate($request, $reglas);

      $user->nombre = $request->input('nombre');
      $user->apellido = $request->input('apellido');
      $user->email = $request->input('email');
      $user->direccion = $request->input('direccion');
      $user->celular = $request->input('celular');
      $user->codigo_postal = $request->input('codigo_postal');
      $user->ciudad = $request->input('ciudad');
      $user->provincia = $request->input('provincia');
      $user->pais = $request->input('pais');

      $user->save();
      return redirect("profile/$user->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
