@extends('templates.master')

@section('contenido-principal')
<div class="container mt-5">
    <div class="row">
      <div class="col-md-4 mb-4" id="auto-card-template" style="display: none;">
        <div class="card">
          <img src="#" class="card-img-top" alt="Auto" id="auto-image">
          <div class="card-body">
            <h5 class="card-title" id="auto-name">Nombre del Auto</h5>
            <p class="card-text" id="auto-year">Año: 2024</p>
            <p class="card-text" id="auto-status">Disponible: Sí</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  

@endsection