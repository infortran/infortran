<nav id="nav" class="navbar nav-transparent">
    <div class="container">
        <div class="navbar-header">
            <div class="navbar-brand">
                <a href="/">
                    <img class="logo" src="{{asset('/images/logo-250.png')}}" alt="Infortran">
                    <img class="logo-alt" src="{{'/images/logo-250-alt.png'}}" alt="Infortran">
                </a>
            </div>
            <div class="nav-collapse">
                <span></span>
            </div>
        </div>
        <ul class="main-nav nav navbar-nav navbar-right">
            <li><a href="#home">@lang('index.home')</a></li>
            <li><a href="#about">@lang('index.about') </a></li>
            <li><a href="#portfolio">@lang('index.portfolio') </a></li>
            <li><a href="#service">@lang('index.services') </a></li>
            <!--li><a href="#pricing">Precios</a></li-->
            <li><a href="#team">@lang('index.team') </a></li>
            <li class="has-dropdown"><a href="#blog">@lang('index.news') </a>
                <ul class="dropdown">
                    <li><a href="blog-single">Blog de Noticias</a></li>
                </ul>
            </li>
            <li><a href="#contact">@lang('index.contact') </a></li>
        </ul>
    </div>
</nav>
