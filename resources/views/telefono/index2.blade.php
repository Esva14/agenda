@extends('layouts.principal')
@section('hijos')

<a href="telefono/create/" class="btn btn-primary">Agregar Nuevo Telefono</a>
<table class="table">
    <thead>
            <tr>
                    <th>ID</th>
                    <th>CodTelefono</th>
                    <th>Telefono</th>
                    <th>CodPersona</th>      
            </tr>
    </thead>

    <tbody>
        @foreach($telefonos as $telefono)
        
        <tr>
            <th>{{$telefono->id}}</th>
            <th>{{$telefono->codTelefono}}</th>
            <th>{{$telefono->telefono}}</th>
            <th>{{$telefono->codPersona}}</th>
            <th>
            </th>
        </tr>

        @endforeach
    </tbody>
</table>


@endsection