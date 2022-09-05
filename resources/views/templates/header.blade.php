<div class="container-fluid bg-orange-lighter position-relative">
    <div class="container">
        <div class="row">
            <div class="col-3 pt-3 pb-3">
                <a href="{{ route('dashboard') }}" class="text-decoration-none">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/logo.png') }}" alt="logo" width="70" height="70" style="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="color-dark">Up Instan <br>Photobooth</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col d-flex align-items-center ps-5 pe-3 justify-content-end">
                <div class="d-lg-none d-block">
                    <div class="">
                        <h1 id="navbarButton"><i class="fas fa-bars"></i></h1>
                    </div>
                </div>
                <div class="collapsible-navbar-custom active" id="collapsibleNavbar">
                    <div class="collapsible-navbar-content">
                        <a href="{{ route('dashboard') }}" class="text-a-dark {{ $active == 'dashboard' ? 'active' : '' }} me-5">Beranda</a>
                        <a href="{{ route('orders.create') }}" class="text-a-dark {{ $active == 'order' ? 'active' : '' }} me-5">Reservasi</a>
                        <a href="{{ route('contact') }}" class="text-a-dark {{ $active == 'contact' ? 'active' : '' }} me-5">Kontak</a>
                        <a href="{{ route('about') }}" class="text-a-dark {{ $active == 'about' ? 'active' : '' }} me-5">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


{{-- border border-3 --}}