@extends('layouts.index')

@section('content')
<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider slider-height d-flex align-items-center zoom" data-background="index/assets/img/hero/h1_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-9 col-md-10">
                        <div class="hero__caption">
                            <h2 class="titulo"><span class="typed"></span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- How  Apply Process Start-->
<div class="apply-process-area apply-bg pt-75 pb-75" data-background="index/assets/img/gallery/how-applybg.png">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle white-text text-center">
                    <h2> ¡Conocé nuestro Portal de Empleo de la UNL!<small><br> ¿Como funciona?</small></h2>
                </div>
            </div>
        </div>
        <!-- Apply Process Caption -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class="flaticon-search"></span>
                    </div>
                    <div class="process-cap">
                       <h5>1. Search a job</h5>
                       <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class="flaticon-curriculum-vitae"></span>
                    </div>
                    <div class="process-cap">
                       <h5>2. Apply for job</h5>
                       <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class="flaticon-tour"></span>
                    </div>
                    <div class="process-cap">
                       <h5>3. Get your job</h5>
                       <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
<!-- How  Apply Process End-->
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
 <div class="online-cv cv-bg section-overly pt-75 pb-75"  data-background="index/assets/img/gallery/cv_bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="cv-caption text-center">
                    <p class="pera3"> Marca la diferencia, te ayudamos a crear tu CV</p>
                    <a href="{{ url('/hacer-mi-cv') }}" class="border-btn2 border-btn4">Hacer mi CV</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Online CV Area End-->
<!-- Our Services Start -->
<div class="our-services pt-75 pb-75">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>Empleos más demandados en nuestro Portal</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-contnet-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-tour"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="job_listing.html">Design & Creative</a></h5>
                        <span>(653)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-cms"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="job_listing.html">Design & Development</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-report"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="job_listing.html">Sales & Marketing</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-app"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="job_listing.html">Mobile Application</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-helmet"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="job_listing.html">Construction</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-high-tech"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="job_listing.html">Information Technology</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-real-estate"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="job_listing.html">Real Estate</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-content"></span>
                    </div>
                    <div class="services-cap">
                       <h5><a href="job_listing.html">Content Writer</a></h5>
                        <span>(658)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Services End -->
<!-- Blog Area Start -->
<div class="home-blog-area pt-75 pb-75">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>Oferta Posgrados</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="index/assets/img/blog/home-blog1.jpg" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <p>FBCB</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            <a href="#" class="more-btn">Ver más »</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="index/assets/img/blog/home-blog2.jpg" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <p>FADU</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            <a href="#" class="more-btn">Ver más »</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="index/assets/img/blog/home-blog2.jpg" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <p>FIQ</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            <a href="#" class="more-btn">Ver más »</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="index/assets/img/blog/home-blog1.jpg" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <p>FBCB</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            <a href="#" class="more-btn">Ver más »</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="index/assets/img/blog/home-blog2.jpg" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <p>FCE</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            <a href="#" class="more-btn">Ver más »</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="index/assets/img/blog/home-blog2.jpg" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <p>FICH</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            <a href="#" class="more-btn">Ver más »</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Blog Area End -->
@endsection