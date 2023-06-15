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
                Laboratorio de CVs <small style="font-weight: 100;">Listado de Curriculums</small>
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

            <!-- /.card-header -->
            <div class="card-body">
                <div class="col-md-12 col-xs-12 pt-4" align="right">
                    <a class="btn btn-primary btn-sm-block" href="{{ url('admin/curriculum/create') }}"><i class="fa fa-plus"> </i> Agregar CV</a>
                </div>
                <div class="col-md-12 col-xs-12 pt-4">
                    <table id="curriculums2" class="table table-hover pt-4">
                        <thead>
                            <tr>
                                <th style="width: 5%;">ID</th>
                                <th style="width: 30%;">E-Mail</th>
                                <th style="width: 25%;">Apellido</th>
                                <th style="width: 25%;">Nombre</th>
                                <th style="width: 15%;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($curriculums as $curriculum)
                            <tr>
                                <td>{{ $curriculum->id }}</td>
                                <td>{{ $curriculum->email }}</td>
                                <td>{{ $curriculum->lastname }}</td>
                                <td>{{ $curriculum->name }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a class="btn btn-sm btn-info" href="{{ url('admin/curriculum/'.$curriculum->id) }}"><i class="fa fa-eye"></i></a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a class="btn btn-sm btn-warning" href="{{ url('admin/curriculum/'.$curriculum->id).'/edit' }}"><i class="fa fa-pen"></i></a>
                                        </div>
                                        <div class="col-sm-4">
                                            <form action="{{route('curriculum.destroy', $curriculum->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar?')"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- /.modal -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12" align="center">
                    {{ $curriculums->links() }}
                </div>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
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