@extends('layouts.principal')
@section('hijos')

<a href="correo/create/" class="btn btn-primary">Agregar Nuevo Correo</a>
<table class="table">
    <thead>
            <tr>
                    <th>ID</th>
                    <th>CodCorreo</th>
                    <th>Correo</th>
                    <th>CodPersona</th>
                    
            </tr>
    </thead>

    <tbody>
        @foreach($correos as $correo)
<tr>
            <th>{{$correo->id}}</th>
            <th>{{$correo->codEmail}}</th>
            <th>{{$correo->email}}</th>
            <th>{{$correo->codPersona}}</th>
            <th>
            </th>
</tr>
        @endforeach
    </tbody>
</table>


@endsection