@extends('layouts.plantilla')

@section('title','Crear Directorio')

<h4>Formulario de creacion de Directorio</h4>
<span><a href="{{route('tipos.index')}}"><-- Regresar </a></span>
<div>
    <form  id="formTipos">
        <input id="txtDescripcion" type="text" name="descripcion">
        <button type="submit">Enviar</button>
    </form>
</div>
<script type="text/javascript" src="{{asset('js/tipo/create.js')}}"></script>