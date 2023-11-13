@extends('layouts.app')
@section('content')
    <section class="page-section max-vh-100">
        <div class="container-fluid mt-4">
            <div class="row">
                <div id="welcomeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#welcomeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        @for($i = 2; $i <= 11; $i++)
                            <button type="button" data-bs-target="#welcomeCarousel" data-bs-slide-to="{{ $i - 1 }}" aria-label="Slide {{ $i }}"></button>
                        @endfor
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset("images/welcome/welcome-1.jpeg") }}" class="d-block w-100 h-25"
                                 alt="{{"welcome-1"}}">
                        </div>
                        @for($i = 2; $i <= 11; $i++)
                            <div class="carousel-item">
                                <img src="{{ asset("images/welcome/welcome-$i.jpeg") }}" class="d-block w-100 h-25"
                                     alt="{{"welcome-$i"}}">
                            </div>
                        @endfor
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#welcomeCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#welcomeCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
