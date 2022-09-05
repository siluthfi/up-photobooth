@extends('templates.index')

@section('main-content')
    <div class="container p-5">
    </div>
    
    <div class="container">
        <div class="row mb-4">
            <div class="col-md">
                <h1>Buat Reservasi</h1>
            </div>
        </div>
        <form action="{{ route('orders.create') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <p class="text-muted m-0">Data Pemesan</p>
            <div class="row p-4 bg-orange-lighter mb-5">
                <div class="row">
                    <div class="col-md">
                        <label>Nama *</label>
                        {!! Form::text('name', null, ['class' => 'form-control form-control-lg shadow-sm mb-3']) !!}
                        <label>No. Telp *</label>
                        {!! Form::number('phone', null, ['class' => 'form-control form-control-lg shadow-sm mb-3']) !!}
                    </div>
                    <div class="col-md">
                        <label>Alamat</label>
                        {!! Form::textarea('address', null, ['class' => 'form-control form-control-lg shadow-sm mb-3', 'rows' => '4']) !!}
                    </div>
                </div>
            </div>
            <p class="text-muted m-0">Tempat, tanggal dan tema</p>
            <div class="row p-4 bg-orange-lighter mb-5">
                <div class="col-md">
                    <label>Tempat</label>
                </div>
            </div>
        </form>
    </div>
@endsection
