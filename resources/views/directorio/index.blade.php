@extends('layouts.plantilla')

@section('title','Directorios')

<style>
    th, td{
        border : 1px solid #000;
    }
</style>

<span><a href="{{route('directorios.create')}}">Crear un Directorio</a></span><br>
<span><a href="{{route('tipos.index')}}">Ver tipo contacto</a></span>

<h4>Estos son los directorios registrados</h4>
<table id="tblDirectorios">
    <thead>
        <th>Nombre</th>
        <th>Tipo Contacto</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Direccion</th>
    </thead>
    <tbody id="tblBodyDirectorios">
    </tbody>
</table>
<script type="text/javascript" src="{{asset('js/directorio/index.js')}}"></script>
