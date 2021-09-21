@extends('plantilla.plantilla')
@section('contenido')
<table class="table">
<thead class="d1">
    <tr>
    <th colspan="3">NOMBRE</th>
    <th colspan="3">APELLIDO</th>
    <th colspan="3">Función</th>
    </tr>
</thead>
<tbody>
    @foreach($scanerss as $escaner)
    <tr>
    <td colspan="3">{{$escaner->nombre}}</td>
    <td colspan="3">{{$escaner->apellido}}</td>
    <td colspan="3"><a href="{{route('scaner.detalle')}}">Ver Mas..</a></td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection