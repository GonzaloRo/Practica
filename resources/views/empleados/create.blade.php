@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">             

                <div class="card-body">
                <form method="POST" action="{{url('/empleados')}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="Nombre" class="form-control"
                           type="text" placeholder="Nombre">
                           <label class="label">Apellido materno</label>
                    <input required autocomplete="off" name="ApellidoPaterno" class="form-control"
                           type="text" placeholder="Apellido Paterno">
                           <label class="label">Apellido Materno</label>
                    <input required autocomplete="off" name="ApellidoMaterno" class="form-control"
                           type="text" placeholder="Apellido Materno">
                           <label class="label">Correo</label>
                    <input required autocomplete="off" name="Correo" class="form-control"
                           type="mail" placeholder="Correo">
                </div>
               
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="#">Volver al listado</a>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
