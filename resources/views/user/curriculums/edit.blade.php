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
                <form action="{{ url('admin/curriculum/'.$curriculum->id) }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>Nombre:</label>
                                    <input type="text" class="form-control" value="{{ $curriculum->name }}" id="name" name="name" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>Apellido:</label>
                                    <input type="text" class="form-control" value="{{ $curriculum->lastname }}" id="lastname" name="lastname" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>Localidad:</label>
                                    <input type="text" class="form-control" value="{{ $curriculum->location }}" id="location" name="location" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>Dirección:</label>
                                    <input type="text" class="form-control" value="{{ $curriculum->address }}" id="address" name="address" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>DNI:</label>
                                    <input type="text" class="form-control" value="{{ $curriculum->dni }}" id="dni" name="dni" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>Teléfono celular:</label>
                                    <input type="text" class="form-control" value="{{ $curriculum->cell_phone }}" id="cell_phone" name="cell_phone" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>Fecha de nacimiento:</label>
                                    <input type="date" class="form-control" value="{{ $curriculum->date_of_birth }}" id="date_of_birth" name="date_of_birth" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label>Correo electrónico:</label>
                                    <input type="email" class="form-control" value="{{ $curriculum->email }}" id="email" name="email" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Formación:</label>
                                    <textarea class="form-control" id="training" name="training" rows="5" maxlength="1000">{{ $curriculum->training }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Experiencia laboral:</label>
                                    <textarea class="form-control" id="work_experience" name="work_experience" rows="5" maxlength="1000">{{ $curriculum->work_experience }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Idiomas:</label>
                                    <textarea class="form-control" id="languages" name="languages" rows="5" maxlength="1000">{{ $curriculum->languages }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Cursos y capacitaciones:</label>
                                    <textarea class="form-control" id="courses_trainings" name="courses_trainings" rows="5" maxlength="1000">{{ $curriculum->courses_trainings }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Intereses o información adicional:</label>
                                    <textarea class="form-control" id="interests_or_additional_information" name="interests_or_additional_information" rows="5" maxlength="1000">{{ $curriculum->interests_or_additional_information }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <img src="{{asset($curriculum->photo)}}" alt="{{ $curriculum->name }}" class="img-fluid" style="width=100%; max-height: 300px; border-radius: 5px;background-size: cover;">
                                </div>
                            </div>

                            <div class="col-md-8 pt-5">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Seleccione una foto:</label>
                                    <input type="file" class="form-control-file" id="photo" name="photo" accept="image/png,image/jpeg">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-danger" href="{{ url('admin/curriculum') }}">Volver</a>
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