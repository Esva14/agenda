@extends('layouts.principal')

@section('hijos')

<h1>Agregar Nueva persona</h1>

<div class="container">
<div class="row">
<div class="col">
    
<form action="/persona" method="POST">
    @csrf
    <div class="mb-3">
    <label for="">Codigo Persona</label>
    <input type="text" name="codPersona" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="Nombre"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="Apellido"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Ciudad</label>
    <input type="text" name="ciudad"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Cumpleaños</label>
    <input type="text" name="cumpleaños"  class="form-control">
    </div>


    <button type="submmit">Guardar</button>
</form>

</div>
</div>
</div>
@endsection