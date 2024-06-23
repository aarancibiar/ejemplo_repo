@extends('layout') <!-- Extiende la plantilla base -->
@section('content')
    <h1>Arriendos de Camionetas</h1>
    @foreach ($arriendos as $arriendo)
        <div class="arriendo">
            <p>Patente: {{ $arriendo->patente }}</p>
            <p>Modelo: {{ $arriendo->modelo }}</p>
            <!-- Mostrar más detalles aquí -->
            <img src="{{ asset($arriendo->foto_entrega) }}" alt="Entrega">
            <img src="{{ asset($arriendo->foto_recepcion) }}" alt="Recepción">
        </div>
    @endforeach
@endsection
