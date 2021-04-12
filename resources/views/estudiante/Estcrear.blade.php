@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">             

                <div class="card-body">
                <form method="POST" action="store">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre">
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
