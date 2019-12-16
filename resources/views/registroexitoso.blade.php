@extends('layouts.app')
@section('title','')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Registro exitoso!
                    <div class="">
                      <a href="{{ url('/') }}">
                      <button type="button" name="button"> Home
                      </button>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
