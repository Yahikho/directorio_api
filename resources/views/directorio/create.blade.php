@extends('layouts.plantilla')

@section('title','Crear Directorio')

<span><a href="{{route('directorios.index')}}"><-- Regresar </a></span>

<h4>Formulario de creacion de Directorio</h4>

<div>
    <form id="formDirectorios">
        <label>
            Tipo de contacto:
            <select name="id_tipo_contacto" id="select">
                @foreach ($tipoContacto as $tipo)
                    <option value="{{$tipo->id}}">{{$tipo->descripcion}}</option>
                @endforeach
            </select>
        </label>
        <br>
        <label>
            Nombre contacto:
            <input type="text" name="nombre" id="nombre" >
        </label>
        <br>
        <label>
            Telefono contacto:
            <input type="number" name="telefono" id="telefono" >
        </label>
        <br>
        <label>
            Email contacto:
            <input type="text" name="email" id="email" >
        </label>
        <br>
        <label>
            Direccion contacto:
            <input type="text" name="direccion" id="direccion" >
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
</div>

<script type="text/javascript" src="{{asset('js/directorio/create.js')}}"></script>