@extends('layouts.plantilla')

@section('title','Edita directorio')
<span><a href="{{route('directorios.index')}}"><-- Regresar </a></span>
<p>Directorio contacto: <strong>{{$directorio->nombre}}</strong></p>
<br>
<form id="formDirectorios">
    <form id="formDirectorios">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{$directorio->id}}" name="id" id="idDirectorio">
        <label>
            Tipo de contacto:
            <select name="id_tipo_contacto" id="id_tipo_contacto">
                @foreach ($tipoContacto as $tipo)
                    <option value="{{$tipo->id}}">{{$tipo->descripcion}}</option>
                @endforeach
            </select>
        </label>
        <br>
        <label>
            Nombre contacto:
            <input type="text" name="nombre" id="nombre" value="{{$directorio->nombre}}">
        </label>
        <br>
        <label>
            Telefono contacto:
            <input type="number" name="telefono" id="telefono" value="{{$directorio->telefono}}">
        </label>
        <br>
        <label>
            Email contacto:
            <input type="text" name="email" id="email" value="{{$directorio->email}}">
        </label>
        <br>
        <label>
            Direccion contacto:
            <input type="text" name="direccion" id="direccion" value="{{$directorio->direccion}}">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
</form>


<script type="text/javascript" src="{{asset('js/directorio/edit.js')}}"></script>
