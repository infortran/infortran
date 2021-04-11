<!DOCTYPE html>
<html lang="es">
<head>
    <script src="{{asset('js/gtm.js')}}" defer></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infortran | Servicios informáticos, Chile.</title>
    <meta name="description" content="Servicios Informáticos de confianza, Creación de sitios web, Mantencion de sitios y tiendas e-commerce, VTEX, Magento, Creación de Apps Multiplataforma, Diseño de UX, Programación Laravel PHP." />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Infortran, Servicios Informáticos - Freddy Pérez" />
    <meta property="og:image" content="{{asset('/images/background.jpg')}}" />
    <meta property="og:image:width" content="640" />
    <meta property="og:image:height" content="442" />
    <meta property="og:title" content="Infortran Soluciones Informáticas.">
    <meta property="og:url" content="https://infortran.cl">
    <meta name="robots" content="index,follow"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />
    <script src="https://www.google.com/recaptcha/api.js" defer></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NT8B33R"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<body>

@yield('content')


<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>
