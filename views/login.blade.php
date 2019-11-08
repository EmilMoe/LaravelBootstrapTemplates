{{--
    In order to vertical center the form:
    <html> must have the class h-100
    <body> must have the class h-100

    ['logo' => url] can be used to insert an application logo.

    _vertical-input-group.scss must be loaded for prettier input fields:
    @import 'vendor/emil/laravel-bootstrap-templates/src/scss/vertical-input-group';
--}}

<div class="container-fluid h-100">
    <div class="row h-100 d-flex align-items-center justify-content-center">
        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 col-10 text-center">
            <form method="post" action="{{ url('/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @if(isset($logo))
                    <img class="mb-4" src="{{ $logo }}" alt="" height="72">
                @endif

                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

                <div class="vertical-input-group mb-3">
                    <div class="input-group">
                        <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    </div>

                    <div class="input-group">
                        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    </div>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                <p class="mt-5 mb-3 text-muted small">{{ env('APP_NAME') }} &copy; {{ date('Y') }}</p>
            </form>
        </div>
    </div>
</div>