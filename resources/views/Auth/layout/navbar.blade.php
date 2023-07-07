
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('login') }}">GrocerApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            @if (Route::currentRouteName() == 'register.index')
                <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
            @else
                <a class="btn btn-primary" href="{{ route('register.index') }}">Signup</a>
            @endif

        </div>
    </div>
</nav>

