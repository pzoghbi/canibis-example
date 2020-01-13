@extends('app')
@section('content')
    <div class="wrapper odd out">
        <div class="container in">
            <div class="row">
                <h1>@lang('contact.success')</h1>
            </div>

            <div class="row">
                <p>@lang('contact.thank-you')</p>
            </div>

            <div class="row text-center mt-5">
                <div class="col-sm">
                    <img class="img-fluid img-thumbnail" src="{{ asset('assets/img/mail-dog.gif') }}" alt="">
                </div>
            </div>

            <div class="row text-center mt-1">
                <div class="col-sm">
                    @lang('contact.redirect')
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm">
                    <small>@lang('contact.redirect-fallback') <a style="display: inline;" href="{{ route('/') }}">@lang('contact.click-here')</a></small>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        setTimeout(function(){
            window.location.replace("{{ route('/') }}");
        }, 8000);
    </script>
@stop