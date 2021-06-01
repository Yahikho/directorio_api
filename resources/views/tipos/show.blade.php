@extends('layouts.plantilla')

@section('title','Tipo/ '. $tipo->descripcion)

<span><a href="{{route('tipos.index')}}"><-- Regresar </a></span><br>
<span><a href="{{route('tipos.edit', $tipo)}}">Edita Tipo --></a></span>

<p>Tipo contacto: <strong>{{$tipo->descripcion}}</strong></p>
<br>
<form id="borrarTipo">
    <input id="txtIdTipo" type="hidden" value="{{$tipo->id}}" name="idTipo">
    <button type="submit">Eliminar Tipo</button>
</form>


<script type="text/javascript" src="{{asset('js/tipo/destroy.js')}}"></script>
