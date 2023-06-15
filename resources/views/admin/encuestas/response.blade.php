@extends('adminlte::page')

@section('title', 'PPE - Curriculos')

@section('content_header')
<div class="container-fluid">
    <div class="row pt-3">
        <div class="col-md-6 col-xs-12">
            <h2>
                Encuestas PPE <small style="font-weight: 100;">Resultados</small>
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
                    <response-encuestas-component :data="{{ json_encode($respuestas->items()) }}" :data_required="{{ $datos_requeridos }}" />
                </div>
                
                <div class="col-md-12" align="center">
                    {{ $respuestas->links() }} 
                </div>
                
                <div class="card-footer" align="center">
                    <div class="d-flex justify-content-between pt-4 pb-4">
                <a class="btn btn-danger" href="{{ url('admin/encuestas') }}"><i class="fa fa-arrow-left"> </i> Volver</a>
            </div>

                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#curriculums').DataTable( {
        "order": [[ 0, "desc" ]],
        "responsive": true
    } );
} );
</script>
@stop