@extends('adminlte::page')

@section('title', 'PPE - Curriculos')

@section('content_header')
<div class="container-fluid">
    <div class="row pt-3">
        <div class="col-md-12 col-xs-12">
            <h2>
                Encuestas PPE <small style="font-weight: 100;">Listado de Encuestas</small>
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
                    <encuestas-component :data="{{ json_encode($encuestas->items()) }}" />     
                </div>
                <div class="card-footer" align="center">
                    <div class="col-md-12">
                        {{ $encuestas->links() }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')

@stop