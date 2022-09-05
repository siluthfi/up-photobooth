<div class="row p-3 position-absolute">
    <div class="col">
        <h1><a class="link-dark position-fixed" onclick="enableOverlay(this)"><span><i class="fas fa-bars"></i></span></a></h1>
    </div>
</div>

<div class="row navbar-overlay">
    <div class="col-2 px-4 py-3">
        <div class="row">
            <div class="col">
                <h1 class="display-4"><a class="link-dark" onclick="disableOverlay(this)"><span><i class="fas fa-times"></i></span></a></h1>
            </div>
        </div>
    </div>
    {{-- <div class="col-8 d-flex align-items-md-center justify-content-md-between" id="linkSection"> --}}
    <div class="col-8 text-center" id="linkSection">
        <h1 class="mb-5"><a class="text-decoration-none hidden transition-3 link-dark {{ $active == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}" id="linkNavbar">Beranda</a></h1>
        <h1 class="mb-5"><a class="text-decoration-none hidden transition-3 link-dark {{ $active == 'order' ? 'active' : '' }}" href="{{ route('orders.create') }}" id="linkNavbar">Reservasi</a></h1>
        <h1 class="mb-5"><a class="text-decoration-none hidden transition-3 link-dark {{ $active == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}" id="linkNavbar">Kontak</a></h1>
        <h1 class="mb-5"><a class="text-decoration-none hidden transition-3 link-dark {{ $active == 'about' ? 'active' : '' }}" href="{{ route('about') }}" id="linkNavbar">Tentang Kami</a></h1>
        <span class="link-span">&copy; Up Instan Photobooth</span>
    </div>
    {{-- <div class="rectangle mb-3"></div>
    <div class="rectangle mb-3"></div> --}}
</div>