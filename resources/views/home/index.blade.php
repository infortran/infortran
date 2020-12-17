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

<!-- Footer goes here -->
@include('templates.footer')

@include('modals.modal-mensaje-enviado')

@endsection
