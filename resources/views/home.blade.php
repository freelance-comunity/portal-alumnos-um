@extends('layouts.master-app')

@section('content')
  @section('widgets')
@include('partials.widgets')
  @endsection
  @section('title-dashboard')
  Inicio
  @endsection
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de Inicio</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  Bienvenido al sistema de la universidad Maya!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
