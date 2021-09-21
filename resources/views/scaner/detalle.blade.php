@extends('plantilla.plantilla')
@section('contenido')
<table class="table">
<thead >
    <tr>
    <th colspan="12" class="t0">SCANER CORPORAL</th>
    </tr>
</thead>
<tbody>
@foreach($scaners as $scaner)
    <tr>
    <td colspan="12" class="t">Nombre: {{$scaner->nombre}} {{$scaner->apellido}}</td>
    </tr>
    <tr>
      <td colspan="6" class="t">Fecha Nac: {{$scaner->fecha_nac}}</td>
      <td colspan="6" class="t">Celular: {{$scaner->celular}}</td>
    </tr>
    <tr>
      <td colspan="6" class="t">Edad: {{$scaner->edad}}</td>
      <td colspan="6" class="t">Estatura: {{$scaner->estatura}}</td>
    </tr>
    <tr>
      <td colspan="6" class="t1">Niveles</td>
      <td colspan="1" class="t1">Mujer</td>
      <td colspan="1" class="t1">Varón</td>
      <td colspan="1" class="t1">1</td>
      <td colspan="1" class="t1">2</td>
      <td colspan="1" class="t1">3</td>
      <td colspan="1" class="t1">4</td>
    </tr>
    <tr>
    <td colspan="6" class="t2">Peso</td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
    </tr>
    <tr>
    <td colspan="6" class="t2">B.M.I (Grasa Corporal)</td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
    </tr>
    <tr>
    <td colspan="6" class="t2">B.F (Masa Corporal)</td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
    </tr>
    <tr>
    <td colspan="6" class="t2">M.M (Masa Muscular)</td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
    </tr>
    <tr>
    <td colspan="6" class="t2">B.W (Agua Corporal)</td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
    </tr>
    <tr>
    <td colspan="6" class="t2">G.V (Grasa Viseral)</td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
    </tr>
    <tr>
    <tr>
    <td colspan="6" class="t2">BONE (Hueso)</tds>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
    </tr>
    <tr>
    <td colspan="6" class="t2">K.CAL(Metabolismo)</td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
    </tr>
    <td colspan="6" class="t2">P(Proteína)</td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
    </tr>
    <tr>
    <td colspan="6" class="t2">O (Obesidad)</td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
    </tr>
    <tr>
    <td colspan="6" class="t2">M.A (Edad Metabólica)</td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
      <td colspan="1" class="t2"></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
