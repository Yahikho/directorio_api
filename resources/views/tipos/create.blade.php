@extends('layouts.plantilla')

@section('title','Crear Directorio')

<h4>Formulario de creacion de Tipo contacto</h4>
<span><a href="{{route('tipos.index')}}"><-- Regresar </a></span>
<div>
    <form  id="formTipos">
        <input id="txtDescripcion" type="text" name="descripcion">
        <button type="submit">Enviar</button>
    </form>
    @error('descripcion')
        <small>{{$message}}</small>
    @enderror
</div>
<script type="text/javascript" src="{{asset('js/tipo/create.js')}}"></script>