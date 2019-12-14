@extends('layouts.app')
@section('title','Edicion de Perfil')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header px-5">Editar tus datos</div>

                  <div class="card-body">
                      <form method="POST" action="">
                          @csrf
                          @method('PATCH')

                          <div class="form-group row">
                              <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="on" autofocus>

                                  @error('nombre')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                              <div class="col-md-6">
                                  <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="on" autofocus>

                                  @error('apellido')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="on">

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

                              <div class="col-md-6">
                                  <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" required autocomplete="on">


                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                              <div class="col-md-6">
                                  <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" required autocomplete="on">


                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="codigo_postal" class="col-md-4 col-form-label text-md-right">{{ __('Codigo postal') }}</label>

                              <div class="col-md-6">
                                  <input id="codigo_postal" type="text" class="form-control @error('codigo_postal') is-invalid @enderror" name="codigo_postal" required autocomplete="on">


                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="ciudad" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

                              <div class="col-md-6">
                                  <input id="ciudad" type="text" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" required autocomplete="on">


                              </div>
                          </div>
                          <div class="form-group row">
                            <label for="provincia" class="col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>

                            <div class="col-md-6">
                              {{-- <input id="provincia" type="text" class="form-control @error('provincia') is-invalid @enderror" name="provincia" required autocomplete="on"> --}}
                                <select class="col-md-12" id="selectProvincias">

                                </select>

                              </div>
                            </div>
                          <div class="form-group row">
                              <label for="pais" class="col-md-4 col-form-label text-md-right">{{ __('Pais') }}</label>

                              <div class="col-md-6">
                                  <input id="pais" type="text" class="form-control @error('pais') is-invalid @enderror" name="pais" required autocomplete="on">


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
      {{-- <script src="public/listadoProvincias.js" type="text/javascript"> --}}

      </script>
  </div>
@endsection
