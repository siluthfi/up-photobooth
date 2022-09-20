@extends('adminlte::page')

@section('title', $title ?? config('adminlte.title'))

@section('content_header')
    <h1>{{ $title }} List</h1>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-md mb-3">
            @forelse ($buttons as $item)
                {!! $item !!}
            @empty
                <div class="kosong"></div>
            @endforelse
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <x-adminlte-card theme="lime" theme-mode="outline">
                {{ $dataTable->table(['class' => 'table table-striped table-bordered']) }}
            </x-adminlte-card>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // $.ajax({
        //     url: "{{ route('admin.orders.index') }}",
        //     type: "GET",
        //     dataType: "JSON",
        //     success: function(data) {
        //         console.log(data)
        //     }
        // })
    </script>
    {{  $dataTable->scripts()  }}
    {{-- <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
@endsection