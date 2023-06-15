@extends('layouts.index')

@section('content')
<!-- Online Test Area Start -->
 <div class="online-cv cv-bg section-overly" style="height: 90vh; border-bottom: 3px solid #00a1b8;"  data-background="{{ url('/') }}/index/assets/img/index/simula_entrevistas01.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="cv-caption text-center pt-4 pb-4">
                    <p style="color: #fff; font-size: 60px;font-weight: 300; text-align: center; box-sizing: border-box;padding-top:20%; margin-bottom: 0; line-height: normal !important;"> SIMULADOR DE ENTREVISTAS</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Online CV Area End-->
<!-- Featured_job_start -->
<section class="featured-job-area pt-75 pb-75">
    <div class="container">
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
@endsection