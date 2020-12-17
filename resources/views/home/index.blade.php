@extends('templates.main')

@section('content')

<!-- Header goes here -->
@include('home.header')

<!-- About goes here -->
@include('home.about')

<!-- Portfolio goes here -->
@include('home.portfolio')

<!-- Service goes here -->
@include('home.service')

<!-- Features goes here -->
@include('home.features')

<!-- Numbers goes here -->
@include('home.numbers')

<!-- Pricing goes here -->

<!-- Team goes here -->
@include('home.team')

<!-- Testimonial goes here -->
@include('home.testimonial')

<!-- Blog goes here -->

<!-- Contact goes here -->
@include('home.contact')

<footer id="footer" class="sm-padding bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-logo">
                    <a href="/"><img src="images/logo-250-alt.png" alt="logo"></a>
                </div>
                <ul class="footer-follow">
                    <li><a href="https://www.facebook.com/Infortran.chile/"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/Infortran_CL"><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/freddy-p%C3%A9rez-pacheco"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <div class="footer-copyright">
                    <p>Diseñado por <a href="https://infortran.cl" target="_blank">Infortran S.I.</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="back-to-top"></div>
<!--div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div-->
@include('modals.modal-mensaje-enviado')

@endsection
