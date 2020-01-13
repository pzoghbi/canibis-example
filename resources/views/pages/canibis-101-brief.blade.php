<div class="wrapper out odd" id="canibis-101">
    <div class="container in">
        <div class="row">
            <div class="col-sm text-center">
                <h2 class="h1 text-shadow">Canibis 101</h2>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-sm">
                <div class="col-sm-10 col-md-8 offset-md-2 offset-sm-1">
                    <p>@lang('canibis-101.intro')</p>
                 </div>
            </div>
        </div>

        <div class="row">
            <a class="button m-auto col-sm-4 col-md-3" onclick="on()" data-src="" data-url="{{ route('canibis-101') }}">@lang('links.canibis-101-learn-more')</a>
        </div>
    </div>
</div>

<div id="overlay" onclick="off()">
    @include('pages.canibis-101')
</div>