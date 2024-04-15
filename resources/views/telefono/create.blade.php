@extends('layouts.principal')
@section('hijos')

<h1>Crear Telefono</h1>

<div class="container">
<div class="row">
<div class="col">
<form action="/telefono" method="POST">
@csrf

    <div class="mb-3">
    <label for="">Codigo Telefono</label>
    <input type="text" name="codTelefono" class="form-control"  >
    </div>

    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Codigo Persona</label>
    <input type="text" name="codPersona"  class="form-control" >
    </div>


<button type="submit">Guardar</button>

</form>

</div>
</div>
</div>

@endsection