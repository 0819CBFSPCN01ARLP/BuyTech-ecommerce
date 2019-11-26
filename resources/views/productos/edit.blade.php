@extends('layouts.app')
@section('title','Editar Producto')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header px-5">Editar producto</div>

                  <div class="card-body">
                      <form method="POST" enctype="multipart/form-data" action="">
                          @csrf
                          @method('PATCH')

                          <div class="form-group row">
                              <label for="modelo" class="col-md-4 col-form-label text-md-right">{{ __('Modelo') }}</label>

                              <div class="col-md-6">
                                  <input id="modelo" type="text" class="form-control @error('modelo') is-invalid @enderror" name="modelo" value="{{ old('modelo') }}" required autocomplete="on" autofocus>

                                    @error('modelo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="precio" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                              <div class="col-md-6">
                                  <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}" required autocomplete="on" autofocus>

                                    @error('precio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

                              <div class="col-md-6">
                                  <input id="stock" type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autocomplete="on">

                                    @error('stock')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="marca" class="col-md-4 col-form-label text-md-right">{{ __('Marca') }}</label>

                              <div class="col-md-6">
                                <select class="" name="marca">
                                  @foreach ($marcas as $marca)
                                    <option value="{{$marca->id}}">{{$marca->descripcion}}</option>
                                  @endforeach
                                </select>

                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="memoria" class="col-md-4 col-form-label text-md-right">{{ __('Memoria') }}</label>

                              <div class="col-md-6">
                                <select class="" name="memoria">
                                  @foreach ($memorias as $memoria)
                                    <option value="{{$memoria->id}}">{{$memoria->descripcion}}</option>
                                  @endforeach
                                </select>

                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="procesador" class="col-md-4 col-form-label text-md-right">{{ __('Procesador') }}</label>
                              <div class="col-md-6">
                                <select class="" name="procesador">
                                  @foreach ($procesadores as $procesador)
                                    <option value="{{$procesador->id}}">{{$procesador->descripcion}}</option>
                                  @endforeach
                                </select>

                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="disco" class="col-md-4 col-form-label text-md-right">{{ __('Disco') }}</label>

                              <div class="col-md-6">
                                <select class="" name="disco">
                                  @foreach ($discos as $disco)
                                    <option value="{{$disco->id}}">{{$disco->descripcion}}</option>
                                  @endforeach
                                </select>

                              </div>
                          </div>
                          <div class="form-group row">
                            <label for="pantalla" class="col-md-4 col-form-label text-md-right">{{ __('Pantalla') }}</label>
                              <div class="col-md-6">

                                <select class="" name="pantalla">
                                  @foreach ($pantallas as $pantalla)
                                    <option value="{{$pantalla->id}}">{{$pantalla->descripcion}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                          <div class="form-group row">
                              <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                              <div class="col-md-6">
                                  <input id="descripcion" type="textarea" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" required autocomplete="on">
                                    @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="imagen" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>

                              <div class="col-md-6">
                                  <input id="imagen" type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen" required >
                                    @error('imagen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              </div>
                          </div>



                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      Editar
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
