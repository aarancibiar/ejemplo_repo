@extends('templates.master')

@section('contenido-principal')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 d-flex flex-column">
                <img src="{{ asset('images/eclipse.jpg') }}" class="card-img-top" alt="Auto 1">
                <div class="card-body">
                    <h5 class="card-title">Auto 1</h5>
                    <p class="card-text">Año: 2022</p>
                    <p class="card-text">Disponible: Sí</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 d-flex flex-column">
                <img src="{{ asset('images/Mc.jpg') }}" class="card-img-top" alt="Auto 2">
                <div class="card-body">
                    <h5 class="card-title">Auto 2</h5>
                    <p class="card-text">Año: 2023</p>
                    <p class="card-text">Disponible: No</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 d-flex flex-column">
                <img src="{{ asset('images/s2000.jpg') }}" class="card-img-top" alt="Auto 3">
                <div class="card-body">
                    <h5 class="card-title">Auto 3</h5>
                    <p class="card-text">Año: 2021</p>
                    <p class="card-text">Disponible: Sí</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 d-flex flex-column">
                <img src="{{ asset('images/subaruwrxsti.jpg') }}" class="card-img-top" alt="Auto 4">
                <div class="card-body">
                    <h5 class="card-title">Auto 4</h5>
                    <p class="card-text">Año: 2020</p>
                    <p class="card-text">Disponible: Sí</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 d-flex flex-column">
                <img src="{{ asset('images/supra.jpg') }}" class="card-img-top" alt="Auto 5">
                <div class="card-body">
                    <h5 class="card-title">Auto 5</h5>
                    <p class="card-text">Año: 2019</p>
                    <p class="card-text">Disponible: No</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 d-flex flex-column">
                <img src="{{ asset('images/huevo.jpg') }}" class="card-img-top" alt="Auto 6">
                <div class="card-body">
                    <h5 class="card-title">Auto 6</h5>
                    <p class="card-text">Año: 2018</p>
                    <p class="card-text">Disponible: Sí</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
