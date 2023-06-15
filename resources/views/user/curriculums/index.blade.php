@extends('adminlte::page')

@section('title', 'PPE - Curriculos')

@section('css')
    <link rel="stylesheet" href="cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
@stop

@section('content_header')
<div class="container-fluid">
    <div class="row pt-3">
        <div class="col-md-6 col-xs-12">
            <h2>
                Laboratorio de CVs <small style="font-weight: 100;">Mis Curriculums</small>
            </h2>
        </div>
        
    </div>
</div>
@stop


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">

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