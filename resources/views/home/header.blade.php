<header id="home">
    <div class="bg-img" style="background-image: url('/images/background.jpg');">
        <div class="overlay"></div>
    </div>

    <!-- nav goes here -->
    @include('templates.nav')

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
