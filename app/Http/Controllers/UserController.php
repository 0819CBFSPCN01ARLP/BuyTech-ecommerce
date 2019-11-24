<?php

namespace App\Http\Controllers;

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


    public function rerouteToProfile(User $user){

      return redirect()->route('profile', [$user]);

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
    public function edit(User $user)
    {
      return view('editprofile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      $user->fill([
        "nombre" => $request->input('nombre'),
        "apellido" => $request->input('apellido'),
        "email" => $request->input('email'),
        "direccion" => $request->input('direccion'),
        "celular" => $request->input('celular'),
        "codigo_postal" => $request->input('codigo_postal'),
        "ciudad" => $request->input('ciudad'),
        "provincia" => $request->input('provincia'),
        "pais" => $request->input('pais')
      ]);
      $user->update();
      return redirect("profile/$user->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
