@extends('layouts.app')

@section('content')
    <div class="container">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-image: url('https://hdqwalls.com/wallpapers/black-hole-my.jpg');
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center;

            }

            h3 {
                text-align: center;
            }
        </style>

        <div class="row justify-content-center">
            <div class="col-md-25">
                <div class="card">
                    <div class="card-header">{{ __('My Portofolio') }}</div>

                </div>
            </div>
            <div class="col-md-25">
                <div class="card">
                    <div class="card-header">
                        <h3>Welcome to My Website</h3>
                    </div>
                </div>
                <button><a href="{{ route('portofolio') }}" class="text-sm text-dark-700 dark:text-dark-500 underline">My
                        Portofolio</a></button>
                <button><a href="{{ route('cloth') }}" class="text-sm text-dark-700 dark:text-dark-500 underline">My Cloth
                        Store</a></button>
            </div>
        </div>
    </div>
    </div>
@endsection
