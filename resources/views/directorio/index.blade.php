@extends('layouts.plantilla')

@section('title','Directorios')

<style>
    th, td{
        border : 1px solid #000;
    }
</style>

<h4>Estos son los directorios registrados</h4>
<span><a href="{{route('directorios.create')}}">Crear un Directorio</a></span><br>
<span><a href="{{route('tipos.index')}}">Tipo de contacto</a></span>
<table id="tblDirectorios">
    <thead>
        <th>Nombre</th>
        <th>Tipo Persona</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Direccion</th>
    </thead>
    <tbody id="tblBodyDirectorios">
    </tbody>
</table>
<script type="text/javascript" src="{{asset('js/directorio/index.js')}}"></script>
