@section('header')

    <nav id="navbar" class="navbar navbar-expand-lg navbar-light pb-0">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo/logo.png') }}">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarContent" aria-controls="navbarContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Domov</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#actuarial">Aktuárstvo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#study">Štúdium</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">Aktuality</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#career">Pracovné príležitosti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontakt</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <a href="#" class="btn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true">Otestuj sa <i class="bi bi-arrow-right"></i></a>
                </ul>
            </div>
        </div>
    </nav>

    <div class="discover">
        <div class="text">
            <h1 class="text-primary font-silka-l">Spoznajme aktuárstvo</h1>
            <h4><span class="fw-bold font-silka-sb">Všetko o aktuároch, ich povolaní aj štúdiu</span> sa dozviete na tejto stránke.</h4>
            
            <div>
                <a href="#">
                    <span class="bi bi-mouse"></span>
                    <span class="more">Zistiť viac</span>
                </a>
            </div>
        </div>
    </div>

@endsection