@extends('layouts.index')

@section('content')
<div id="app">
    <!-- Online CV Area Start -->
    <div class="online-cv cv-bg section-overly" style="min-height: 90vh;" data-background="{{ url('/') }}/index/assets/img/gallery/test_simulator.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-xs-12 col-sm-12">
                    <div class="cv-caption pt-120 pb-120">
                        <test-component 
                            pregs="{{ $encuesta[0] }}" 
                            datos_requeridos="{{ $datos_requeridos }}"
                            preguntas="{{ $preguntas }}" 
                            tips="{{ $tips }}"
                            carreras="{{ $carreras }}"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Online CV Area End-->    
</div>
@endsection