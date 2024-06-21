@extends('templates.master')

@section('contenido-principal')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar Nuevo Vehículo</div>

                <div class="card-body">
                    <form action="{{ route('vehiculos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="patente">Patente:</label>
                            <input type="text" class="form-control" id="patente" name="patente" required>
                        </div>

                        <div class="form-group">
                            <label for="modelo">Modelo:</label>
                            <input type="text" class="form-control" id="modelo" name="modelo" required>
                        </div>

                        <div class="form-group">
                            <label for="anio">Año:</label>
                            <input type="number" class="form-control" id="anio" name="anio" required>
                        </div>

                        <div class="form-group">
                            <label for="tipo_vehiculo">Tipo de Vehículo:</label>
                            <select class="form-control" id="tipo_vehiculo" name="tipo_vehiculo" required>
                                <option value="Sedán">Sedán</option>
                                <option value="Camioneta">Camioneta</option>
                                <option value="Deportivo">Deportivo</option>
                                <!-- Agrega más opciones según tus necesidades -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="disponibilidad">Disponibilidad:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="disponibilidad" name="disponibilidad" value="1">
                                <label class="form-check-label" for="disponibilidad">Disponible</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="imagen">Imagen:</label>
                            <input type="file" class="form-control-file" id="imagen" name="imagen">
                        </div>

                        <button type="submit" class="btn btn-primary">Agregar Vehículo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
