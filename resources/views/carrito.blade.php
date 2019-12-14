@extends('layouts.app')
@section('title','Buytech')
@section('content')

  <div class="p-5">

    <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Tu carrito</span>
        <span class="badge badge-secondary badge-pill">  </span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"> {{$producto->marca->descripcion}} </h6>
            <small class="text-muted"> {{$producto->modelo}} </small> <br>
            <small class="text-muted"> {{$producto->procesador->descripcion}} </small>
          </div>
          <span class="text-muted">{{$producto->precio}}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between">
          <span> Total </span>
          <strong>{{$producto->precio}}</strong>
        </li>
      </ul>

      {{-- FORMULARIO PARA CHECKOUT --}}

      <form method="post" class="card p-2">
        @csrf
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Código de descuento">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Aplicar</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Dirección de envío</h4>
      <form class="needs-validation" novalidate="">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="{{Auth::user()->nombre}}" required="required">
            <div class="invalid-feedback">
              Incluir nombre válido.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Apellido</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="{{Auth::user()->apellido}}" required="required">
            <div class="invalid-feedback">
              Incluir apellido válido.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Opcional)</span></label>
          <input value="{{Auth::user()->email}}" type="email" class="form-control" id="email" placeholder="">
          <div class="invalid-feedback">
            Por favor ingresa un mail válido para recibir información de envío.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Dirección</label>
          <input type="text" value="{{Auth::user()->direccion}}" class="form-control" id="address" placeholder="Calle falsa 123" required="">
          <div class="invalid-feedback">
            Incluir dirección válida.
          </div>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">País</label>
            <select class="custom-select d-block w-100" id="country" required="">
              <option value="">Elegir...</option>
              <option>Argentina</option>
            </select>
            <div class="invalid-feedback">
              Seleccioná un país válido.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Provincia</label>
            <select class="custom-select d-block w-100" id="selectProvincias" required="">

            </select>
            <div class="invalid-feedback">
              Seleccioná un país válido.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Código postal</label>
            <input value="{{Auth::user()->codigo_postal}}" type="text" class="form-control" id="zip" placeholder="" required="">
            <div class="invalid-feedback">
              El código postal es necesario.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">La dirección de envío es igual que la dirección de facturación</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Guardar información para una próxima compra</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Información de pago</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
            <label class="custom-control-label" for="credit">Tarjeta de crédito</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="debit">Tarjeta de débito</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Nombre de la tarjeta</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
            <small class="text-muted">Escribí el nombre completo como aparece en la tarjeta.</small>
            <div class="invalid-feedback">
              El nombre de la tarjeta es necesario.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Número de la tarjeta</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
            <div class="invalid-feedback">
              El numero de la tarjeta es necesario.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Vencimiento</label>
            <input type="date" class="form-control" id="cc-expiration" placeholder="" required="">
            <div class="invalid-feedback">
              La fecha de vencimiento es necesaria.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">Código de seguridad</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
            <small class="text-muted">En el dorso de tu tarjeta.</small>
            <div class="invalid-feedback">
              El código de seguridad es necesario.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <input name="invisibleUserId" type="hidden" value="{{Auth::user()->id}}">
        <input name="invisibleProductId" type="hidden" value="{{$producto->id}}">
        <button id="compraFinalizada" class="btn btn-primary btn-lg btn-block" type="submit">Finalizar compra</button>
      </form>
    </div>
  </div>

  </div>


@endsection
