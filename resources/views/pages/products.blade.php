<div class="wrapper out odd" id="products">
    <div class="container in">
        <div class="row">
            <div class="col-sm-10 col-md-8 offset-md-2 offset-sm-1">
                <h2 class="h1 text-shadow text-center">@lang('products.title')</h2>
            </div>
        </div>

        <div class="row pt-5">
            <p class="col-sm-10 col-md-10 offset-md-1 offset-sm-1">
                @lang('products.description')
            </p>
        </div>

        <div class="pt-4 mb-5 mt-3 border rounded" id="sm-breeds">
            <div class="row pt-5">
                <div class="col-sm-10 col-md-8 offset-md-2 offset-sm-1 pb-5 text-center">
                    <h3 class="h4">@lang('products.small-breeds')</h3>
                </div>
            </div>
            
            <div class="pt-2">
                <div class="card-deck">
                    <div class="col">
                        <div class="card mb-4">
                            <a class="img-hover">
                                <img src="{{ asset('assets/img/products/canibis-sm-a-3.png') }}" class="card-img-top" />
                            </a>
                            <div class="card-body">
                                <p>@lang('products.beefsm3')</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-4">
                            <a class="img-hover">
                                <img src="{{ asset('assets/img/products/canibis-sm-b-3.png') }}" class="card-img-top" />
                            </a>
                            <div class="card-body">
                                <p>@lang('products.chknsm3')</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-4">
                            <a class="img-hover">
                                <img src="{{ asset('assets/img/products/canibis-sm-a-1.png') }}" class="card-img-top" />
                            </a>
                            <div class="card-body">
                                <p>@lang('products.beefsm1')</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <a class="img-hover">
                                <img src="{{ asset('assets/img/products/canibis-sm-b-1.png') }}" class="card-img-top" />
                            </a>
                            <div class="card-body">
                                <p>@lang('products.chknsm1')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-4 pb-4 border rounded bg-white" id="lg-breeds">
            <div class="row pt-5">
                <div class="col-sm-10 col-md-8 offset-md-2 offset-sm-1 pb-5 text-center">
                    <h3 class="h4">@lang('products.large-breeds')</h3>
                </div>
            </div>

            <div class="row pt-2">
                <div class="card-deck">

                    <div class="col-sm-6 col-md-4 offset-md-2">
                        <div class="card mb-4">
                            <a class="img-hover">
                                <img src="{{ asset('assets/img/products/canibis-lg-a-3.png') }}" class="card-img-top" />
                            </a>
                            <div class="card-body">
                                <p>@lang('products.beeflg3')</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <a class="img-hover">
                                <img src="{{ asset('assets/img/products/canibis-lg-b-3.png') }}" class="card-img-top" />
                            </a>
                            <div class="card-body">
                                <p>@lang('products.chknlg3')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>