@extends('layouts.index')

@section('content')
<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider slider-height d-flex align-items-center zoom img-portada">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-9 col-md-10">
                        <div class="hero__caption">
                            <h2 style="color: white;font-size:72px; font-weight: 300;" class="titulo"><span class="typed"></span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- Featured_job_start -->
<section class="featured-job-area pt-75 pb-75">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>Entrevistas Simuladas</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($encuestas as $e)
            <div class="col-xl-4 p-4">
                <div class="card zoom" style="width: 100%; height: 100%;">
                    <div class="card-header">
                        <h5 class="card-title">{{ $e->name }}</h5>
                    </div>
                    <div class="card-body">      
                        <p class="card-text">{{ $e->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('/').'/simulador-virtual/'.$e->slug }}" class="btn btn-block card-link">Realizar encuesta</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Featured_job_end -->
<!-- Online CV Area Start -->
 <div class="online-cv cv-bg section-overly pt-75 pb-75" data-background="index/assets/img/index/arma_tu_cv01.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="cv-caption text-center">
                    <p class="pera3"> Marca la diferencia, te ayudamos a crear tu CV</p>
                    <a href="{{ url('/hacer-mi-cv') }}" class="border-btn2 border-btn4 mr-4">Hacer mi CV</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Online CV Area End-->
@endsection