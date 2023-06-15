@extends('layouts.index')

@section('content')
<!-- Online CV Area Start -->
 <div class="online-cv cv-bg section-overly" style="height: 86vh; border-bottom: 3px solid #00a1b8;"  data-background="index/assets/img/index/arma_tu_cv01.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="cv-caption text-center pt-4 pb-4">
                    <p style="color: #fff; font-size: 60px;font-weight: 300; text-align: center; box-sizing: border-box;padding-top: 20%; margin-bottom: 0; line-height: normal !important;">CREA TU CV CIEGO</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Online CV Area End-->
<!-- Our Services Start -->
<div class="our-services pt-75 pb-75">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('generatePDF') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input type="text" class="form-control" id="name" name="name" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Apellido:</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Título académico:</label>
                                            <input type="text" class="form-control" id="academic_title" name="academic_title" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Localidad:</label>
                                            <input type="text" class="form-control" id="location" name="location" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label>DNI/CUIL:</label>
                                            <input type="text" class="form-control" id="dni" name="dni" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Teléfono celular:</label>
                                            <input type="text" class="form-control" id="cell_phone" name="cell_phone" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Fecha de nacimiento:</label>
                                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Correo electrónico:</label>
                                            <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Linkedin:</label>
                                            <input type="text" class="form-control" id="linkedin" name="linkedin" autocomplete="off">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Formación:</label>
                                            <textarea class="form-control" id="training" name="training" rows="9" maxlength="1000" placeholder="Por ejemplo:
2016-ACTUALIDAD Contador Público Nacional
Facultad de Ciencias Económicas - Universidad Nacional del Litoral  
20 Materias Aprobadas de 36 del Plan de Estudio - Promedio General: 7"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Experiencia laboral:</label>
                                            <textarea class="form-control" id="work_experience" name="work_experience" rows="9" maxlength="1000" placeholder="Por ejemplo:
2018-2020 Pasantía en EMPRESA SA 
Apoyo y asistencia al área contable de la empresa en el marco de una pasantía educativa.
Tareas de liquidación de impuestos, registro contable, conciliaciones bancarias y tramites con proveedores. Capacitación y uso del Sistema de Gestión TANGO para la administración y control de compras. Colaboración activa en la realización de Informes Contables.   
"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Idiomas:</label>
                                            <textarea class="form-control" id="languages" name="languages" rows="9" maxlength="1000" placeholder="2018-ACTUALIDAD Idioma Inglés - Estudios en curso
Centro de Idiomas de la Universidad Nacional del Litoral
Nivel Intermedio (Nivel 4) Aprobado

LSA- Lengua de Señas Argentina 
Centro de Idiomas de la Universidad Nacional del Litoral
"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Cursos y capacitaciones:</label>
                                            <textarea class="form-control" id="courses_trainings" name="courses_trainings" rows="9" maxlength="1000" placeholder="2020 - Curso de Marketing Digital 
Cursos de Formación Virtual de la Universidad Nacional del Litoral
Duración 4 meses - Aprobado: 9

2019 - 2020 Curso de Actualización Asistente Impositivo 
Cursos de Formación Virtual de la Universidad Nacional del Litoral
Duración 18 meses - Aprobado: 7
"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Intereses:</label>
                                            <textarea class="form-control" id="interests_or_additional_information" name="interests_or_additional_information" rows="9" maxlength="1000" placeholder="Los CVS de tipo 'americano' pueden contener información extra que nos ayude a persuadir a los reclutadores sobre nuestras competencias a la hora de desenvolvernos en equipos de trabajo. Algunos ejemplos:
- Práctica de deportes de manera profesional o semi-profesional 
- Voluntariados o trabajo en vecinales 
- Participación en actividades universitarias de extensión 
- Algún proyecto o emprendimiento personal en ejecución 
"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Información adicional:</label>
                                            <textarea class="form-control" id="additional_information" name="additional_information" rows="9" maxlength="1000" placeholder="- Remuneración pretendida 
- Disponibilidad horaria 
- Disponibilidad para radicarse en otra localidad 
- Disponibilidad para viajar - carnet de conducir
"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-xs-block btn-sm-block" href="{{ url('/') }}">Volver</a>
                                    @auth
                                        <button class="btn btn-xs-block btn-sm-block" type="submit">Guardar y generar PDF</button>
                                    @endauth

                                    @guest
                                        <button class="btn btn-xs-block btn-sm-block" type="submit">Gererar PDF</button>
                                    @endguest
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
    </div>
</div>
<!-- Our Services End -->
@endsection