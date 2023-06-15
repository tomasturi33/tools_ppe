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
                Encuestas PPE <small style="font-weight: 100;">ver</small>
            </h2>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row pt-4">
                        <div class="col-md-2 col-xs-12">
                            <div class="form-group text-md-right">
                                <label>Nombre: </label>
                            </div>
                        </div>
                        <div class="col-md-10 col-xs-12">
                            <div class="form-group">
                                {{ $encuesta->name }}
                            </div>
                        </div>
                    </div>

                    @if($encuesta->description)
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <div class="form-group text-md-right">
                                <label>Descripción: </label>
                            </div>
                        </div>
                        <div class="col-md-10 col-xs-12">
                            <div class="form-group">
                                {{ $encuesta->description }}
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <div class="form-group text-md-right">
                                <label>Estado: </label>
                            </div>
                        </div>
                        <div class="col-md-10 col-xs-12">
                            <div class="form-group">
                                {{ $encuesta->state==1?'PUBLICADA':'NO PUBLICADA' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Preguntas:</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @foreach($encuesta->preguntas as $p)
                            <div class="col-md-6 col-xs-12 p-4">
                                <div class="form-group">
                                    <h4>{{ $p->pregunta }}</h4>

                                    <ul class="list-group">
                                        @foreach($p->opciones as $o)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                {{ $o->opcion }}
                                            <span class="badge badge-primary badge-pill">{{ $o->valor }}%</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <h3>Respuestas:</h3>
            <div class="card">
                <div class="card-body">

                    <div class="row pt-4">
                        <div class="col-md-2 col-xs-12">
                            <div class="form-group text-md-right">
                                <label>Respuesta 1 [0-25%]: </label>
                            </div>
                        </div>
                        <div class="col-md-10 col-xs-12">
                            <div class="form-group">
                                {{ $encuesta->respuesta_1 }}
                            </div>
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col-md-2 col-xs-12">
                            <div class="form-group text-md-right">
                                <label>Respuesta 2 [26-50%]: </label>
                            </div>
                        </div>
                        <div class="col-md-10 col-xs-12">
                            <div class="form-group">
                                {{ $encuesta->respuesta_2 }}
                            </div>
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col-md-2 col-xs-12">
                            <div class="form-group text-md-right">
                                <label>Respuesta 3 [51-75%]: </label>
                            </div>
                        </div>
                        <div class="col-md-10 col-xs-12">
                            <div class="form-group">
                                {{ $encuesta->respuesta_3 }}
                            </div>
                        </div>
                    </div>

                    <div class="row pt-4">
                        <div class="col-md-2 col-xs-12">
                            <div class="form-group text-md-right">
                                <label>Respuesta 4 [76-100%]: </label>
                            </div>
                        </div>
                        <div class="col-md-10 col-xs-12">
                            <div class="form-group">
                                {{ $encuesta->respuesta_4 }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Tips:</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-group">
                                @foreach($tips as $o)
                                    <li class="list-group-item">
                                        {{ $o->tip }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between pt-4 pb-4">
                <a class="btn btn-danger" href="{{ url('admin/encuestas') }}">Volver</a>
            </div>

            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
@stop

@section('js')

@stop