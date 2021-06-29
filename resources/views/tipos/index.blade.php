@extends('layouts.plantilla')

@section('title','Directorios')

<style>
    th, td{
        border : 1px solid #000;
    }
</style>

<span><a href="{{route('directorios.index')}}"><-- Regresar </a></span><br>

<span><a href="{{route('tipos.create')}}">Crear tipo contacto --></a></span>

<h4>Estos son los tipos de contactos registrados</h4>

<table id="tblTipos">
    <thead>
        <th >Descripcion</th>
    </thead>
    <tbody id="tblBodyTipos">
    </tbody>
</table>
<script type="text/javascript" src="{{asset('js/tipo/index.js')}}"></script>
