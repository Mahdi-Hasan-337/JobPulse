<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        @include('components.logo-name')

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Job</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="col-lg-4 btn btn-primary" type="submit">Logout</button>
                        </form>
                    @else
                        <a class="login-btn my-1 mx-1" data-bs-toggle="modal" href="#LoginModal" role="button">Login</a>
                        @include('auth.login')


                        @if (Route::has('register'))
                            <a class="reg-btn my-1 mx-1" data-bs-target="#RegisterModal" data-bs-toggle="modal"
                                data-bs-dismiss="modal" style="cursor:pointer">Signup</a>
                            @include('auth.register')
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
