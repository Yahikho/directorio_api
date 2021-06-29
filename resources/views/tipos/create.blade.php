@extends('layouts.plantilla')

@section('title','Crear Directorio')

<span><a href="{{route('tipos.index')}}"><-- Regresar </a></span>
<h4>Formulario de creacion de Tipo contacto</h4>
<div>
    <form  id="formTipos">
        <input id="txtDescripcion" type="text" name="descripcion">
        <button type="submit">Enviar</button>
    </form>
</div>
<script type="text/javascript" src="{{asset('js/tipo/create.js')}}"></script>