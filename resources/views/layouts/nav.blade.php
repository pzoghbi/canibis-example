<nav class="navbar navbar-light navbar-expand-lg" id="nav-navbar">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
        <a class="navbar-brand" onclick="$('html, body').animate({scrollTop: 0});">
            <img width="100px" src="{{ asset('assets/img/Canibis_logo.png') }}" />
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-center pl-3 pr-3 rounded" id="nav-menu">
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
                <a onclick="$('html, body').animate({scrollTop: 0});" class="nav-link">@lang('links.home')</a>
            </li>
            <li class="nav-item">
                <a data-src="#sm-breeds" class="nav-link">@lang('links.sm-breeds')</a>
            </li>
            <li class="nav-item">
                <a data-src="#lg-breeds" class="nav-link">@lang('links.lg-breeds')</a>
            </li>
            <li class="nav-item">
                <a data-src="#where-to-buy" class="nav-link">@lang('links.where-to-buy')</a>
            </li>
            <li class="nav-item">
                <a data-src="#canibis-101" class="nav-link">@lang('links.canibis-101')</a>
            </li>
            <li class="nav-item">
                <a data-src="#about-us" class="nav-link">@lang('links.about-us')</a>
            </li>
            <li class="nav-item">
                <a data-src="#contact" class="nav-link">@lang('links.contact')</a>
            </li>
        </ul>
    </div>
</nav>