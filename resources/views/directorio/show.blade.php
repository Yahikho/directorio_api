@extends('layouts.plantilla')

@section('title','Directorio/ '. $directorio->nombre)

<span><a href="{{route('directorios.index')}}"><-- Regresar </a></span><br>
<span><a href="{{route('directorios.edit', $directorio)}}">Edita Directorio --></a></span>

<p>Tipo contacto: <strong>{{$directorio->nombre}}</strong></p>
<br>
<form id="elimianrDirectorio">
    <input id="idDirectorio" type="hidden" value="{{$directorio->id}}" name="idDirectorio">
    <button type="submit">Eliminar Directorio</button>
</form>


<script type="text/javascript" src="{{asset('js/directorio/destroy.js')}}"></script>
