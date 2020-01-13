<div class="wrapper out odd" id="contact">
    <div class="container in">
        <div class="row">
            <div class="col-sm text-center">
                <h2 class="h1 text-shadow">@lang('contact.title')</h2>
            </div>
        </div>

        @if(count($errors) > 0)
            <script type="text/javascript">
                console.log("errors");
                window.location.href = "{{ route('/') }}#contact";
            </script>
            <ul class="bg-danger rounded mt-3">
                @foreach($errors->all() as $error)
                    <li class="list-group-item">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('contact') }}" method="POST">
            @csrf
            <div class="row pt-5">
                <div class="form-group col-sm-10 col-md-8 offset-sm-1 offset-md-2">
                    <label for="input-name">@lang('contact.form-name')</label>
                    <input type="text" class="form-control" name="name" id="input-name" placeholder="Freddy Retriever">
                </div>
            </div>

            <div class="row pt-3">
                <div class="form-group col-sm-10 col-md-8 offset-sm-1 offset-md-2">
                    <label for="input-email">@lang('contact.form-email')</label>
                    <input class="form-control" name="email" id="input-email" placeholder="freddy@example.com"/>
                </div>
            </div>

            <div class="row pt-3">
                <div class="form-group col-sm-10 col-md-8 offset-sm-1 offset-md-2">
                    <label for="input-message">@lang('contact.form-message')</label>
                    <textarea class="form-control" name="message" id="input-message" rows="5"></textarea>
                    <small>@lang('contact.details-claimer')</small>
                </div>
            </div>

            <div class="row text-center">
                <div class="form-group col-sm-10 col-md-8 offset-sm-1 offset-md-2">
                    <button type="submit" value="{{ __('contact.send') }}" class="btn btn-block btn-warning text-uppercase pl-3 pr-3 pt-2 pb-2">
                        @lang('contact.form-submit')
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>