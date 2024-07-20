<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background: #032541">
    <div class="container">
        <a class="navbar-brand" href="{{ route('now-playing') }}"><img src="{{ asset('assets') }}/images/vibes-logo.svg"
                alt="conflix-logo" width="120"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuConflix"
            aria-controls="menuConflix" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuConflix">
            <ul class="navbar-nav mb-2 gap-3 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('now-playing') }}">Sedang tayang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('theater') }}">Bioskop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('upcoming') }}">Akan tayang</a>
                </li>
            </ul>
            @if (Auth::check())
                <div class="dropdown ms-auto">
                    <a class="dropdown-toggle text-decoration-none text-primary fw-semibold" type="button" id="userMenu"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        My Menu
                    </a>
                    <ul class="dropdown-menu rounded-none" aria-labelledby="userMenu">
                        <li><a class="dropdown-item" href="{{ route('user.profile') }}"><i class="fas fa-user me-2"></i> {{ auth()->user()->name }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('payment.history') }}"><i class="fas fa-history me-2"></i> Riwayat Pesanan</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item" type="submit"><i class="fas fa-sign-out-alt me-2"></i> Keluar</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a class="btn btn-outline-primary ms-auto" href="{{ route('login') }}">Masuk</a>
            @endif
        </div>
    </div>
</nav>
