@extends('adminlte::page')

@section('title', $title ?? config('adminlte.title'))

@section('content_header')
    <h1>{{ $title }}</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-adminlte-card theme="lime" theme-mode="outline">
                    <div class="row">
                        <div class="col-md">
                            <label>Name</label>
                            {!! Form::text('name', null, ['class' => 'form-control shadow-sm mb-3']) !!}
                        </div>
                        <div class="col-md">
                            <label>Photo</label>
                            <div class="input-group mb-3 shadow-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="InputPhoto">Upload</span>
                                </div>
                                <div class="custom-file">
                                    {!! Form::file('photo', ['class' => 'custom-file-input', 'id' => 'InputPhotoLabel', 'aria-describedby' => 'InputPhoto']) !!}
                                    <label class="custom-file-label" for="InputPhotoLabel">Choose file</label>
                                </div>
                            </div>                          
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label>Description</label>
                            {!! Form::textarea('description', null, ['class' => 'form-control shadow-sm mb-3', 'rows' => '0', 'cols' => '0']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </x-adminlte-card>
            </form>
        </div>
    </div>
@endsection