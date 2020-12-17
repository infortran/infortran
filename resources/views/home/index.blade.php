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

<div id="testimonial" class="section md-padding">
    <div class="bg-img" style="background-image: url('/images/background3.jpg');">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="testimonial-slider" class="owl-carousel owl-theme">

                    <div class="testimonial">
                        <div class="testimonial-meta">
                            <img src="/images/freddy-thumb.jpg" alt="">
                            <h3 class="white-text">Freddy Pérez</h3>
                            <span>Full Stack Developer</span>
                        </div>
                        <p class="white-text">
                            "There have to be reasons that you get up in the morning and you want to live.
                            Why do you want to live? What's the point? What inspires you? What do you love about the future?
                            If the future does not include being out there among the stars and being a multi-planet species, I find that incredibly depressing."
                            <br><em>Elon Musk.</em>
                        </p>
                    </div>

                    <div class="testimonial">
                        <div class="testimonial-meta">
                            <!--img src="/images/beto-thumb.jpg" alt=""-->
                            <h3 class="white-text">Coming soon</h3>
                            <span>---</span>
                        </div>
                        <p class="white-text">

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--div id="blog" class="section md-padding bg-grey">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">@lang('news.title')</h2>
            </div>
            <div class="col-md-4">
                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="/images/blog1.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li><i class="fa fa-user"></i>John doe</li>
                            <li><i class="fa fa-clock-o"></i>18 Oct</li>
                            <li><i class="fa fa-comments"></i>57</li>
                        </ul>
                        <h3>Molestie at elementum eu facilisis sed odio</h3>
                        <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                        <a href="blog-single.blade.php">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="/images/blog2.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li><i class="fa fa-user"></i>John doe</li>
                            <li><i class="fa fa-clock-o"></i>18 Oct</li>
                            <li><i class="fa fa-comments"></i>57</li>
                        </ul>
                        <h3>Molestie at elementum eu facilisis sed odio</h3>
                        <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                        <a href="blog-single">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="/images/blog3.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li><i class="fa fa-user"></i>John doe</li>
                            <li><i class="fa fa-clock-o"></i>18 Oct</li>
                            <li><i class="fa fa-comments"></i>57</li>
                        </ul>
                        <h3>Molestie at elementum eu facilisis sed odio</h3>
                        <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                        <a href="blog-single">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div-->
<div id="contact" class="section md-padding">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">@lang('contact.title')</h2>
            </div>
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-phone-volume"></i>
                    <h3>Ventas</h3>
                    <p>(+56) 9 470 65 823</p>
                    <p>mayerlin.urbina.trabajo@gmail.com</p>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-envelope"></i>
                    <h3>Email</h3>
                    <p>infortran.chile@gmail.com</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-headset"></i>
                    <h3>Soporte</h3>
                    <p>(+56) 9 470 65 823</p>
                    <p>freddy.perez.trabajos@gmail.com</p>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <form id="mensaje-contacto-form" class="contact-form">
                    <input id="input-contacto-name" type="text" class="input" placeholder="Tu nombre">

                    <input id="input-contacto-email" type="email" class="input" placeholder="Email">

                    <input id="input-contacto-subject" type="text" class="input" placeholder="Asunto">
                    <textarea id="input-contacto-message" class="input" placeholder="Mensaje"></textarea>

                    <div class="alert alert-danger contact-form-alerts">
                        <ul>
                            <li class="name-required"><i class="fa fa-exclamation-circle"></i> El campo Nombre es obligatorio</li>
                            <li class="email-required"><i class="fa fa-exclamation-circle"></i> El campo Email es obligatorio</li>
                            <li class="subject-required"><i class="fa fa-exclamation-circle"></i> El campo Asunto es obligatorio</li>
                            <li class="message-required"><i class="fa fa-exclamation-circle"></i> El campo Mensaje es obligatorio</li>
                            <li class="error-recaptcha"><i class="fa fa-exclamation-circle"></i> Error en ReCaptcha</li>
                            <li class="email-format"><i class="fa fa-exclamation-circle"></i> El campo Email tiene un formato incorrecto</li>
                            <li class="message-limit"><i class="fa fa-exclamation-circle"></i> El limite del mensaje es de 1000 caracteres</li>
                        </ul>

                    </div>
                    <div style="display:flex;align-items: center; justify-content: center">
                        <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                    </div>

                    <button id="btn-enviar-mensaje" class="btn-send" type="submit">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</div>
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
