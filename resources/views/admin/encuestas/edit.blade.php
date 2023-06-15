@extends('adminlte::page')

@section('title', 'PPE - Curriculos')

@section('css')
    <!-- link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('content_header')
<div class="container-fluid">
    <div class="row pt-3">
        <div class="col-12">
            <h2>
                Encuestas PPE <small style="font-weight: 100;">editar</small>
            </h2>
        </div>
    </div>
</div>
@stop


@section('content')
<div class="container-fluid">
    <edit-encuesta-component
        :id="{{ $encuesta->id }}" 
        :encuesta="{{ $encuesta }}"
        :datos_requeridos="{{ $datos_requeridos }}"
        :preguntas="{{ $preguntas }}"
        :tips="{{ $tips}}" 
    />
</div>
@stop

@section('js')

@stop