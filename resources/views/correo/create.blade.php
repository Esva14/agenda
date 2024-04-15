@extends('layouts.principal')
@section('hijos')

<h1>Crear Correo</h1>

<div class="container">
<div class="row">
<div class="col">
<form action="/correo" method="POST">
@csrf

    <div class="mb-3">
    <label for="">Codigo Correo</label>
    <input type="text" name="codEmail" class="form-control"  >
    </div>

    <div class="mb-3">
    <label for="">Correo</label>
    <input type="text" name="email"  class="form-control">
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