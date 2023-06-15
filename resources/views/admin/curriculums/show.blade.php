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
                Laboratorio de CVs <small style="font-weight: 100;">ver</small>
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
                    <div class="row p-4">

                        <div class="col-md-4 pt-4">
                            <div class="col-md-12">
                                <img src="{{asset($curriculum->photo)}}" alt="{{ $curriculum->name }}" class="img-fluid" style="width=100%; max-height: 300px; border-radius: 5px;background-size: cover;">
                            </div>
                        </div>
                        
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 pt-4">
                                    <div class="col-md-12">
                                        <label>Nombre:</label>
                                    </div>
                                    <div class="col-md-12">
                                        {{ $curriculum->name }}
                                    </div>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <div class="col-md-12">
                                        <label>Apellido:</label>
                                    </div>
                                    <div class="col-md-12">
                                        {{ $curriculum->lastname }}
                                    </div>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <div class="col-md-12">
                                        <label>Licalidad:</label>
                                    </div>
                                    <div class="col-md-12">
                                        {{ $curriculum->location }}
                                    </div>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <div class="col-md-12">
                                        <label>Dirección:</label>
                                    </div>
                                    <div class="col-md-12">
                                        {{ $curriculum->address }}
                                    </div>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <div class="col-md-12">
                                        <label>DNI:</label>
                                    </div>
                                    <div class="col-md-12">
                                        {{ $curriculum->dni }}
                                    </div>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <div class="col-md-12">
                                        <label>Teléfono celular:</label>
                                    </div>
                                    <div class="col-md-12">
                                        {{ $curriculum->cell_phone }}
                                    </div>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <div class="col-md-12">
                                        <label>Fecha de nacimiento:</label>
                                    </div>
                                    <div class="col-md-12">
                                        {{ $curriculum->date_of_birth }}
                                    </div>
                                </div>

                                <div class="col-md-6 pt-4">
                                    <div class="col-md-12">
                                        <label>Correo electrónico:</label>
                                    </div>
                                    <div class="col-md-12">
                                        {{ $curriculum->email }}
                                    </div>
                                </div>

                            </div>
                        </div>

                        @if ($curriculum->training)
                        <div class="col-md-12 pt-4">
                            <div class="col-md-12">
                                <label>Formación:</label>
                            </div>
                            <div class="col-md-12">
                                <?php echo nl2br(e($curriculum->training)) ?>
                            </div>
                        </div>
                        @endif

                        @if ($curriculum->work_experience)
                        <div class="col-md-12 pt-4">
                            <div class="col-md-12">
                                <label>Experiencia laboral:</label>
                            </div>
                            <div class="col-md-12">
                                <?php echo nl2br(e($curriculum->work_experience)) ?>
                            </div>
                        </div>
                        @endif

                        @if ($curriculum->languages)
                        <div class="col-md-12 pt-4">
                            <div class="col-md-12">
                                <label>Idiomas:</label>
                            </div>
                            <div class="col-md-12">
                                <?php echo nl2br(e($curriculum->languages))  ?> 
                            </div>
                        </div>
                        @endif

                        @if ($curriculum->courses_trainings)
                        <div class="col-md-12 pt-4">
                            <div class="col-md-12">
                                <label>Cursos y capacitaciones:</label>
                            </div>
                            <div class="col-md-12">
                                <?php echo nl2br(e($curriculum->courses_trainings)) ?>
                            </div>
                        </div>
                        @endif

                        @if ($curriculum->interests_or_additional_information)
                        <div class="col-md-12 pt-4">
                            <div class="col-md-12">
                                <label>Intereses o información adicional:</label>
                            </div>
                            <div class="col-md-12">
                                <?php echo nl2br(e($curriculum->interests_or_additional_information)) ?>
                            </div>
                        </div>
                        @endif  
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-danger" href="{{ url('admin/curriculum') }}">Volver</a>
                        <form action="{{ url('/admin/generate-pdf/'.$curriculum->id) }}" method="GET">
                        {{ csrf_field() }}
                            <button class="btn btn-primary" type="submit">Generar PDF</button>
                        </form>
                    </div>
                </div>
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