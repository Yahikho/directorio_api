@extends('layouts.plantilla')

@section('title','Edita tipo/ '. $tipo->descripcion)
<span><a href="{{route('tipos.index')}}"><-- Regresar </a></span>
<p>Tipo contacto: <strong>{{$tipo->descripcion}}</strong></p>
<br>
<form id="editarTipo">
    <input id="txtIdTipo" type="hidden" value="{{$tipo->id}}">
    <input id="txtDescripcionTipo" type="text" value="{{$tipo->descripcion}}" name="idTipo">
    <button type="submit">Editar Tipo</button>
</form>


<script type="text/javascript" src="{{asset('js/tipo/edit.js')}}"></script>
