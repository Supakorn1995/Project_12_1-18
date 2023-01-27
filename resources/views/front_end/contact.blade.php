@extends('layouts.master_frontend')
@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Contact</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-5 justify-content-center">
    <!-- Google Map Start -->
    <div class="container-center px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -4px;">
        </centerM><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d763.1680857161429!2d100.51643726598948!3d13.839247359675891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b0cab17b829%3A0x910baa44ebcdb840!2z4LmA4Lii4LmH4LiZ4LmC4LiV4LmC4LifIOC4geC5i-C4p-C4ouC5gOC4leC4teC5i-C4ouC4p_CfkLfguJXguYnguKHguKLguLM!5e0!3m2!1sth!2sth!4v1673684499529!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
        </div>
    <!-- Google Map End -->
                   <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                        <h5 class="text-white">Call Us</h5>
                        <p class="mb-5"><i class="fa fa-phone-alt me-3"></i></p>
                        <h5 class="text-white">Email Us</h5>
                        <p class="mb-5"><i class="fa fa-envelope me-3"></i></p>
                        <h5 class="text-white">Office Address</h5>
                        <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i></p>
                        <h5 class="text-white">Follow Us</h5>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
            </div>

        </div>
    </div>
    <!-- Contact End -->








@endsection
