@include('templates.nav')

<!--div-- id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators ->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides ->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="..." alt="...">
            <div class="carousel-caption">
                ...
            </div>
        </div>
        <div class="item">
            <img src="..." alt="...">
            <div class="carousel-caption">
                ...
            </div>
        </div>
        ...
    </div>

    <!-- Controls ->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div-->

<div id="carouselExampleIndicators" class="carousel slide carousel-header-home" data-ride="carousel" data-interval="10000">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <header id="home">
                <!-- nav goes here -->
                <div class="bg-img" style="background-image: url('/images/vtex.png');">
                    <div class="overlay"></div>
                </div>
                <div class="home-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-content">
                                    <h1 class="white-text">VTEX legacy</h1>
                                    <p class="white-text">Administramos el Frontend de tu E-commerce desarrollado en VTEX legacy.</p>
                                    <a href="#contact" class="white-btn btn-scrolling">@lang('index.btn-contact') </a>
                                    <a href="#about" class="main-btn btn-scrolling" >@lang('index.btn-more') </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="item">

            <header id="home">

                <!-- nav goes here -->

                <div class="bg-img" style="background-image: url('/images/magento.jpg');">
                    <div class="overlay"></div>
                </div>


                <div class="home-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-content">
                                    <h1 class="white-text">Magento</h1>
                                    <p class="white-text">Instalamos, configuramos y administramos tu tienda con Magento, un potente E-commerce PHP</p>
                                    <a href="#contact" class="white-btn btn-scrolling">@lang('index.btn-contact') </a>
                                    <a href="#about" class="main-btn btn-scrolling" >@lang('index.btn-more') </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </header>
        </div>
        <div class="item">
            <header id="home">
                <!-- nav goes here -->
                <div class="bg-img" style="background-image: url('/images/background.jpg');">
                    <div class="overlay"></div>
                </div>
                <div class="home-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-content">
                                    <h1 class="white-text">@lang('index.title') </h1>
                                    <p class="white-text">@lang('index.subtitle') </p>
                                    <a href="#contact" class="white-btn btn-scrolling">@lang('index.btn-contact') </a>
                                    <a href="#about" class="main-btn btn-scrolling" >@lang('index.btn-more') </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <a class="left carousel-control" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
