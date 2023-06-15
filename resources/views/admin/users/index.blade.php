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
                Usuarios <small style="font-weight: 100;">Listado de usuarios</small>
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
                <div class="col-md-12 col-xs-12 pt-4">
                    <table id="curriculums2" class="table table-hover pt-4">
                        <thead>
                            <tr>
                                <th style="width: 5%;">ID</th>
                                <th style="width: 25%;">E-Mail</th>
                                <th style="width: 25%;">Usuario</th>
                                <th style="width: 25%;">Rol</th>
                                <th style="width: 20%;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->role=='user'?'Usuario':'Administrador' }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a class="btn btn-sm btn-warning" href="{{ url('admin/users/'.$user->id).'/edit' }}"><i class="fa fa-pen"></i></a>
                                        </div>
                                        <div class="col-sm-4">
                                            <form action="{{route('users.destroy', $user->id)}}" method="POST">
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
                <div class="pt-4">
                    {{ $users->links() }}
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