@extends('templates.master')
@section('contenido-principal')
<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="card col-6">
    <div class="card-body">
      <div class="text-center mb-4">
        <img src="{{ asset('images/auto.jpg') }}" alt="auto" class="img-fluid" style="max-height: 200px;">
      </div>
      <form>
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputemail">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword">
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection