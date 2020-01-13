<div class="wrapper out even" id="about-us">
    <div class="container in">
        <div class="row">
            <div class="col-sm-10 col-md-8 offset-sm-1 offset-md-2 text-center">
                <h2 class="h1 text-shadow">@lang('about-us.title')</h2>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-sm-10 col-md-8 offset-sm-1 offset-md-2">
                <div class="">
                    <p>@lang('about-us.intro')</p>
                </div>
            </div>
        </div>

        <hr class="col-sm-10 col-md-8 offset-sm-1 offset-md-2"/>

        <div class="row mt-3">
            <div class="col-sm-10 col-md-8 offset-sm-1 offset-md-2">
                    <img class="profile-photo mr-4 mb-3" src="{{ asset('assets/img/mario.png') }}">
                    <h3 class="h3 text-warning text-shadow shadow-md pt-1">Mario Falamić, <span class="h4 text-white">owner</span></h3>
                    <p>@lang('about-us.about-mario')</p>
                </div>
            </div>
        </div>
    </div>
</div>