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
                Laboratorio de CVs <small style="font-weight: 100;">editar</small>
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
                <form action="{{ url('admin/users/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-xs-12 pt-4 pb-4">
                                <div class="form-group">
                                    <label>Usuario:</label>
                                    <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" autocomplete="off" required>
                                </div>
                            </div>


                            <div class="col-md-4 col-xs-12 pt-4 pb-4">
                                <div class="form-group">
                                    <label>Correo electrónico:</label>
                                    <input type="email" class="form-control" value="{{ $user->email }}" id="email" name="email" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12 pt-4 pb-4">
                                <div class="form-group">
                                    <label>Rol:</label>
                                    <select class="form-control" name="role">
                                        @foreach($roles as $r)
                                            @if($user->role == $r)
                                                <option name="role" value="{{ $r }}" selected>{{ $r=='user'?'Usuario':'Administrador' }}</option>
                                            @else
                                                <option name="role" value="{{ $r }}">{{ $r=='user'?'Usuario':'Administrador' }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-danger" href="{{ url('admin/users') }}">Volver</a>
                            <button class="btn btn-primary" type="submit">Actualizar</button>
                        </div>
                    </div>
                </form>
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