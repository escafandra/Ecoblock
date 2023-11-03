@extends('layouts.app')
@section('content')
    <div id="welcomeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset("images/welcome/welcome-1.jpeg") }}" class="d-block w-100" alt="{{"welcome-1"}}">
            </div>
            @for($i = 2; $i <= 11; $i++)
            <div class="carousel-item">
                <img src="{{ asset("images/welcome/welcome-$i.jpeg") }}" class="d-block w-100" alt="{{"welcome-$i"}}">
            </div>
            @endfor
        </div>
    </div>
@endsection
