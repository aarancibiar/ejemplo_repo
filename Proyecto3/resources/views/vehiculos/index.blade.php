@extends('templates.master')

@section('contenido-principal')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-md-8">
            <h2>Listado de Vehículos</h2>
        </div>
        <div class="col-md-4 text-right">
            <a href="{{ route('vehiculos.create') }}" class="btn btn-info">Agregar Vehículo</a>
        </div>
    </div>
    <div class="row">
        @foreach($vehiculos as $vehiculo)
        <div class="col-md-4 mb-4">
            <div class="card h-100 d-flex flex-column">
                <img src="{{ asset('storage/' . $vehiculo->imagen) }}" class="card-img-top" alt="Imagen del auto">
                <div class="card-body">
                    <h5 class="card-title">{{ $vehiculo->modelo }}</h5>
                    <p class="card-text">Año: {{ $vehiculo->anio }}</p>
                    <p class="card-text">Tipo: {{ $vehiculo->tipo_vehiculo }}</p>
                    <p class="card-text">Disponible: {{ $vehiculo->disponibilidad ? 'Sí' : 'No' }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
