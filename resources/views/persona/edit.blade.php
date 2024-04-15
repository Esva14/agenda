@extends('layouts.principal')

@section('hijos')
<h1>Editar Persona</h1>

<div class="container">
<div class="row">
<div class="col">
<form action="/persona/{{$editarPersona->id}}" method="POST">
@csrf
@method('PUT')

    <div class="mb-3">
    <label for="">Codigo Persona</label>
    <input type="text" name="codPersona" value="{{$editarPersona->codPersona}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="Nombre" value="{{$editarPersona->Nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="Apellido" value="{{$editarPersona->Apellido}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Ciudad</label>
    <input type="text" name="ciudad" value="{{$editarPersona->ciudad}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Cumpleaños</label>
    <input type="text" name="cumpleaños" value="{{$editarPersona->cumpleaños}}" class="form-control">
    </div>

<button type="submit">Guardar</button>

</form>

</div>
</div>
</div>


@endsection