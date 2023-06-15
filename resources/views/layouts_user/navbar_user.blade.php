<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small class="dark link-light"><i class="fa fa-map-marker-alt text-secondary me-2"></i>Pantai 3 Warna
                Malang</small>
            <small class="ms-4 dark link-light"><i class="fa fa-clock text-secondary me-2"></i>07.00 - 18.00 (Close on Thursday)</small>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="#" onclick="location.reload()" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="display-5 text-primary m-0 rounded">VacationPal
            </h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#" onclick="location.reload()" class="nav-item nav-link active">Home</a>
                <a class="nav-link" href="{{ route('pesan_tiket') }}">Pesan Tiket</a>
                <a class="nav-link" href="{{ route('tiket') }}">Tiket</a>
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link">
                            <i class="fa fa-users text-info"></i> {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="profileDropdown">
                            {{-- <a class="dropdown-item preview-item">
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Settings</p>
                                </div>
                            </a> --}}
                            <!-- <div class="dropdown-divider"></div> -->
                            <a href="#" class="dropdown-item preview-item"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Log out</p>
                                </div>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf</form>
                        </div>
                    </li>
                @else
                    <a href="{{ route('login') }}" class="btn btn-lg">
                        <button type="button" class="btn btn-primary py-2 top-2 end-2 mt-2 me-2">
                            Login
                        </button>
                    </a>
                @endif
            </div>
        </div>
    </nav>
</div>
