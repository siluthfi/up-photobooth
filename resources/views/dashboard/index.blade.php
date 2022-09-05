<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Up Instan Photobooth</title>
</head>
<body>
    <div class="container-fluid">
        
        @include('templates.header-one')

        <div class="row justify-content-center">
            <div class="col-md-8 vh-100 d-flex align-items-center">
                <h1 class="jumbotron text-center">Bikin acara mu semakin menarik dengan <span>Photobooth</span></h1>
            </div>
        </div>

        {{-- <div class="row bg-custom"> --}}
        <div class="row p-0">
            <img src="{{ asset('images/Asset 17.png') }}" alt="" class="img-fluid p-0 d-none d-lg-block">
            <img src="{{ asset('images/Asset 15.png') }}" alt="" class="img-fluid p-0 d-block d-lg-none">
            <div class="border-bottom-orange-3"></div>
        </div>

        <div class="row bg-orange-3 p-5">
            <div class="col-md">
                <h1 class="text-center"><a href="{{ route('orders.create') }}" class="text-a-white">Reservasi sekarang!</a></h1>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>