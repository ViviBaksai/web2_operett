<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">OperettaHarmony</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li @class(['nav-item', 'active' => $_SERVER['REQUEST_URI'] === '/'])>
                    <a class="nav-link" href="/">Főoldal</span></a>
                </li>
                @auth
                <li @class(['nav-item', 'active' => $_SERVER['REQUEST_URI'] === '/news'])>
                    <a class="nav-link" href="/news">Hírek</a>
                </li>
                <li @class(['nav-item', 'active' => $_SERVER['REQUEST_URI'] === '/logout'])>
                    <a class="nav-link" href="/logout">Kilépés</a>
                </li>
                @endauth
                @guest
                <li @class(['nav-item', 'active' => $_SERVER['REQUEST_URI'] === '/login'])>
                    <a class="nav-link" href="/login">Belépés</a>
                </li>
                <li @class(['nav-item', 'active' => $_SERVER['REQUEST_URI'] === '/registration'])>
                    <a class="nav-link" href="/registration">Regisztráció</a>
                </li>
                @endguest
            </ul>
        </div>
        @auth
        <div class="form-inline my-2 my-lg-0">
        Bejelentkezett: {{ Auth::user()->familyName }} {{ Auth::user()->surName }} ({{ Auth::user()->userName }})
        </div>
        @endauth
    </nav>
    @if (isset($message))
    <div class="alert alert-success w-75 p-3 mx-auto text-center alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if (isset($errors))
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger w-75 p-3 mx-auto text-center alert-dismissible fade show" role="alert">
            {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endforeach
    @endif
    @if (isset($errorMessage))
    <div class="alert alert-danger w-75 p-3 mx-auto text-center alert-dismissible fade show" role="alert">
        {{ $errorMessage }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    