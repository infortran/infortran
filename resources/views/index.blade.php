<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infortran</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
    <link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/fontawesome.css">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header id="home">
    <div class="bg-img" style="background-image: url('/images/background.jpg');">
        <div class="overlay"></div>
    </div>
    <nav id="nav" class="navbar nav-transparent">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">
                    <a href="index.html">
                        <img class="logo" src="/images/logo-250.png" alt="logo">
                        <img class="logo-alt" src="/images/logo-250-alt.png" alt="logo">
                    </a>
                </div>
                <div class="nav-collapse">
                    <span></span>
                </div>
            </div>
            <ul class="main-nav nav navbar-nav navbar-right">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Quienes somos</a></li>
                <li><a href="#portfolio">Portafolio</a></li>
                <li><a href="#service">Servicios</a></li>
                <!--li><a href="#pricing">Precios</a></li-->
                <li><a href="#team">Equipo</a></li>
                <li class="has-dropdown"><a href="#blog">Noticias</a>
                    <ul class="dropdown">
                        <li><a href="blog-single">Blog de Noticias</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <div class="home-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="home-content">
                        <h1 class="white-text">Seguridad y diseño</h1>
                        <p class="white-text">Trabajamos con las mejores tecnologías desarrolladas por expertos, para
                            brindar sitios web y aplicaciones mas seguras y con excelentes experiencias del usuario
                        </p>
                        <a href="#contact" class="white-btn btn-scrolling">Contactanos!</a>
                        <a href="#about" class="main-btn btn-scrolling" >Quiero saber mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="about" class="section md-padding">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">Bienvenidos a Infortran</h2>
            </div>
            <div class="col-md-4">
                <div class="about">
                    <i class="fa fa-cogs"></i>
                    <h3>Apps y Webs Personales</h3>
                    <p>Tu sitio, app o CMS hechos a tu medida, con un diseño personalizado o una plantilla a tu elección.</p>
                    <a href="#">Saber mas</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about">
                    <i class="fab fa-aws"></i>
                    <h3>Apps Empresa</h3>
                    <p>Aplicaciones Web, Android, IOS, con Servidores Virtuales Privados, desarrolladas por expertos.</p>
                    <a href="#">Saber mas</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about">
                    <i class="fa fa-mobile"></i>
                    <h3>Full Responsive</h3>
                    <p>Nos encargamos que tus proyectos sean compatibles con la mayoria de resoluciones existentes en el mercado.</p>
                    <a href="#">Saber mas</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="portfolio" class="section md-padding bg-grey">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">Portafolio</h2>
            </div>
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="/images/deliciasurbanas-portfolio.jpg" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>Diseño de marca</span>
                    <h3>Delicias Urbanas</h3>
                    <div class="work-link">
                        <!--a href="#"><i class="fa fa-external-link"></i></a-->
                        <a class="lightbox" href="/images/deliciasurbanas-portfolio.jpg"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="/images/comerciocentral-portfolio.jpg" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>E-commerce App</span>
                    <h3>Comercio Central</h3>
                    <div class="work-link">
                        <a href="https://comerciocentral.cl"><i class="fa fa-link"></i></a>
                        <a class="lightbox" href="/images/comerciocentral-portfolio.jpg"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!--div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="/images/work3.jpg" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>Category</span>
                    <h3>Lorem ipsum dolor</h3>
                    <div class="work-link">
                        <a href="#"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="/images/work3.jpg"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div-->



        </div>
    </div>
</div>
<div id="service" class="section md-padding">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">Que ofrecemos</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-gem"></i>
                    <h3>Desarrollo Web y App</h3>
                    <p>Nos encargamos de hacer tu proyecto real, ya sea un sitio, una aplicación o un sistema
                        completo con apps, CMS web y landing page.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-rocket"></i>
                    <h3>Diseño Gráfico</h3>
                    <p>Conceptos como Material Design, Flat y otros que aportaran al desarrollo de tu idea, respetando los parametros de diseño de grandes como Google.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-cogs"></i>
                    <h3>Aportamos a tu Idea</h3>
                    <p>A veces pensar en todos los detalles de un proyecto es complejo, para eso,
                    nosotros te asesoramos con ideas creativas e innovadoras en el area digital.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-bullhorn"></i>
                    <h3>Marketing y SEO/SEM</h3>
                    <p>Analisis, gestión de marketing digital y posicionamiento web a tu medida.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-headset"></i>
                    <h3>Soporte Integral</h3>
                    <p>Atentos a resolver tu problemas y brindar soluciones eficientes y puntuales.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-flask"></i>
                    <h3>Diseño de marca</h3>
                    <p>Si aun no cuentas con una marca o quieres mejorar tu marca,
                        entonces aca estamos para ayudarte.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="features" class="section md-padding bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-header">
                    <h2 class="title">Por Qué Escogernos</h2>
                </div>
                <p>Somos una empresa joven, con ganas de oportunidades, nuevos clientes y mejorar el servicio a quienes ya confian en nosotros.
                Queremos brindar la seguridad que cualquier cliente merece.
                </p>
                <div class="feature">
                    <i class="fa fa-check"></i>
                    <p>Certificado SSL obligatorio de acuerdo al estandar <em>Let's Encrypt</em>.</p>
                </div>
                <div class="feature">
                    <i class="fa fa-check"></i>
                    <p>Frameworks de excelente calidad y buen soporte.</p>
                </div>
                <div class="feature">
                    <i class="fa fa-check"></i>
                    <p>Codigos limpios, escalables y mantenibles con patron de arquitectura de software MVC.</p>
                </div>
                <div class="feature">
                    <i class="fa fa-check"></i>
                    <p>Metodologias Agiles en procesos de requerimientos como Scrum.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div id="about-slider" class="owl-carousel owl-theme">
                    <img class="img-responsive" src="/images/ssl.jpg" alt="">
                    <img class="img-responsive" src="/images/about2.jpg" alt="">
                    <img class="img-responsive" src="/images/about1.jpg" alt="">
                    <img class="img-responsive" src="/images/about2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="numbers" class="section sm-padding">
    <div class="bg-img" style="background-image: url('/images/background2.jpg');">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <div class="number">
                    <i class="fa fa-users"></i>
                    <h3 class="white-text"><span class="counter">soon</span></h3>
                    <span class="white-text">Clientes</span>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="number">
                    <i class="fa fa-trophy"></i>
                    <h3 class="white-text"><span class="counter">soon</span></h3>
                    <span class="white-text">Reconocimientos</span>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="number">
                    <i class="fa fa-coffee"></i>
                    <h3 class="white-text"><span class="counter">154</span>K</h3>
                    <span class="white-text">Tazas de café</span>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="number">
                    <i class="fa fa-file"></i>
                    <h3 class="white-text"><span class="counter">1</span></h3>
                    <span class="white-text">Projectos completados</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--div-- id="pricing" class="section md-padding">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">Precios</h2>
            </div>
            <div class="col-sm-4">
                <div class="pricing">
                    <div class="price-head">
                        <span class="price-title">Basic plan</span>
                        <div class="price">
                            <h3>$9<span class="duration">/ month</span></h3>
                        </div>
                    </div>
                    <ul class="price-content">
                        <li>
                            <p>1GB Disk Space</p>
                        </li>
                        <li>
                            <p>100 Email Account</p>
                        </li>
                        <li>
                            <p>24/24 Support</p>
                        </li>
                    </ul>
                    <div class="price-btn">
                        <button class="outline-btn">Purchase now</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="pricing">
                    <div class="price-head">
                        <span class="price-title">Silver plan</span>
                        <div class="price">
                            <h3>$19<span class="duration">/ month</span></h3>
                        </div>
                    </div>
                    <ul class="price-content">
                        <li>
                            <p>1GB Disk Space</p>
                        </li>
                        <li>
                            <p>100 Email Account</p>
                        </li>
                        <li>
                            <p>24/24 Support</p>
                        </li>
                    </ul>
                    <div class="price-btn">
                        <button class="outline-btn">Purchase now</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="pricing">
                    <div class="price-head">
                        <span class="price-title">Gold plan</span>
                        <div class="price">
                            <h3>$39<span class="duration">/ month</span></h3>
                        </div>
                    </div>
                    <ul class="price-content">
                        <li>
                            <p>1GB Disk Space</p>
                        </li>
                        <li>
                            <p>100 Email Account</p>
                        </li>
                        <li>
                            <p>24/24 Support</p>
                        </li>
                    </ul>
                    <div class="price-btn">
                        <button class="outline-btn">Purchase now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div-->
<div id="team" class="section md-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="title">El Equipo</h2>
        </div>
        <div class="row" style="display: flex; align-items: center;justify-content: center">

            <div class="col-sm-4">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="/images/beto-team.jpg" alt="">
                        <div class="overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-google-plus"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Roberto Díaz</h3>
                        <span>(CMO) Director de Marketing,</span>
                        <span>Diseñador Web</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="/images/freddy-team.jpg" alt="">
                        <div class="overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-google-plus"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Freddy Pérez</h3>
                        <span>(CEO) Director General,</span>
                        <span>Full Stack Developer</span>
                    </div>
                </div>
            </div>
            <!--div class="col-sm-4">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="/images/team3.jpg" alt="">
                        <div class="overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-google-plus"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>John Doe</h3>
                        <span>Web Designer</span>
                    </div>
                </div>
            </div-->
        </div>
    </div>
</div>
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
                            <img src="/images/beto-thumb.jpg" alt="">
                            <h3 class="white-text">Roberto Díaz</h3>
                            <span>Diseñador Web</span>
                        </div>
                        <p class="white-text">

                        </p>
                    </div>
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
                </div>
            </div>
        </div>
    </div>
</div>

<div id="blog" class="section md-padding bg-grey">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">Noticias Recientes</h2>
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
</div>
<div id="contact" class="section md-padding">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">Contáctanos</h2>
            </div>
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-phone-volume"></i>
                    <h3>Ventas</h3>
                    <p>(+56) 9 470 65 823</p>
                    <p>ventas@infortran.cl</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-envelope"></i>
                    <h3>Email</h3>
                    <p>contacto@infortran.cl</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-headset"></i>
                    <h3>Soporte</h3>
                    <p>(+56) 9 470 65 823</p>
                    <p>soporte@infortran.cl</p>
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
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
@include('modals.modal-mensaje-enviado')
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
