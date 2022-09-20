@extends('adminlte::page')

@section('title', $title ?? config('adminlte.title'))

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('css')
    <style>
        .list-order {

        }
        
        .list-order ::marker {
            color: #28a745;
        }

        .list-order li {
            margin-bottom: 20px;
        }

        .vl {
            width: 10px;
            height: 20px;
            border-left: solid red 5px;
        }
    </style>
@endsection
    
@section('content')

    <div class="row">
        <div class="col-md-9">
            <x-adminlte-card title="New Order" theme="success" icon="fas fa-file-alt">
                <ul class="list-order">
                    <li>
                        <h2>THE WEDDING OF ADAM & EVE</h2>
                        <span>18 September 2022, 7:00 - 14:00, Photoscan & Photobooth</span>
                    </li>
                    <li>
                        <h4>THE WEDDING OF YOU & ME</h4>
                        <span>11 September 2022, 7:00 - 14:00, Photobooth</span>
                    </li>
                    <li>
                        <h4>AMAT'S BIRTHDAY PARTY</h4>
                        <span>4 September 2022, 17:00 - 22:00, Photobooth</span>
                    </li>
                    <li>
                        <h4>THE WEDDING LENA & AMAT</h4>
                        <span>28 June 2022, 15:00 - 19:00, Photobooth</span>
                    </li>
                </ul>
            </x-adminlte-card>
        </div>
        <div class="col-md">
            <x-adminlte-card theme="lime" theme-mode="outline" body-class="text-center bg-light">
                <img src='{{ asset("images/" . auth()->user()->photo) }}' alt="" class="" width="130">
                <hr>
                <h5>{{ auth()->user()->name }}</h5>
                <hr>
                <h5>{{ auth()->user()->number }}</h5>
                <hr>
            </x-adminlte-card>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md">
            <x-adminlte-card title="Photoscan" theme="primary" icon="fas fa-qrcode" collapsible>
                <canvas id="photoscan"></canvas>
            </x-adminlte-card>
        </div>
        <div class="col-md">
            <x-adminlte-card title="Photobooth" theme="info" icon="fas fa-birthday-cake" collapsible>
                <canvas id="photobooth"></canvas>
            </x-adminlte-card>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const ps = document.getElementById('photoscan').getContext('2d');
        const pb = document.getElementById('photobooth').getContext('2d');
        let array = [];
        let array2 = [];
        for (let index = 0; index < 12; index++) {
            array = [Math.round((Math.random() * 20)), ...array]
            array2 = [Math.round((Math.random() * 20)), ...array2]
        }
        
        const photoscan = new Chart(ps, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                    label: 'Photoscan',
                    // data: [65, 59, 80, 65, 59, 80, 65, 59, 80, 65, 59, 80],
                    data: array,
                    fill: true,
                    borderColor: 'rgb(60, 62, 181)',
                    tension: 0.1
                }]
            },
            options: {
                hover: {
                    mode: 'index',
                    intersec: false
                },
                scales: {
                    y: {
                        min: 0,
                        ticks: {
                            stepSize: 5
                        }
                    }
                }
            }
        });

        const photobooth = new Chart(pb, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                    label: 'Photobooth',
                    // data: [65, 59, 80, 65, 59, 80, 65, 59, 80, 65, 59, 80],
                    data: array2,
                    fill: true,
                    borderColor: 'rgb(250, 57, 57)',
                    tension: 0
                }]
            },
            options: {
                hover: {
                    mode: 'index',
                    intersec: false
                },
                scales: {
                    y: {
                        min: 0,
                        ticks: {
                            stepSize: 5
                        }
                    }
                }
            }
        });
        </script>
@endsection