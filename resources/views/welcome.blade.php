@extends('layouts.app')
@section('content')
    <section class="page-section">
        <div class="container mt-4">
            <div class="row mb-5">
                <div class="col-md-4">
                    <img class="d-block w-100" src="{{ asset('images/logos/white-eco.png') }}" alt="logo-2">
                </div>
                <div id="welcomeCarousel" class="carousel slide col-md-8" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#welcomeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        @for($i = 2; $i <= 11; $i++)
                            <button type="button" data-bs-target="#welcomeCarousel" data-bs-slide-to="{{ $i - 1 }}" aria-label="Slide {{ $i }}"></button>
                        @endfor
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset("images/welcome/welcome-1.jpeg") }}" class="d-block h-100 rounded" alt="{{"welcome-1"}}">
                        </div>
                        @for($i = 2; $i <= 11; $i++)
                            <div class="carousel-item">
                                <img src="{{ asset("images/welcome/welcome-$i.jpeg") }}" class="d-block h-100 rounded" alt="{{"welcome-$i"}}">
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
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <iframe class="rounded" src="https://www.youtube.com/embed/6jcG1xGi1rw?si=ZVQl_zhzzpx7NFRh" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Instalación UltraPanel</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <iframe class="rounded" src="https://www.youtube.com/embed/gcs4QFNl1oo?si=z7Fl1Km3svgZ3V06" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Elementos utilizados en la instalación de UltraPanel</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <iframe class="rounded" src="https://www.youtube.com/embed/AavvAgTCo5Q?si=qZr57F4RzJ1d3nih" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Trasiego</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <iframe class="rounded" src="https://www.youtube.com/embed/7Ut_OveFF1w?si=4KI3FVoPl052rQxb" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <div class="card-title">UltraPanel adaptado a la medida</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <iframe class="rounded" src="https://www.youtube.com/embed/wFDnVa0YaEk?si=Gqd1stH2dfi8ST65" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Material más resistente</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <iframe class="rounded" src="https://www.youtube.com/embed/EkT9u1LLrBw?si=4VgM3qaxUWB5gBGc" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Menos peso que otros materiales</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <iframe class="rounded" src="https://www.youtube.com/embed/9B8LZfvYes8?si=fxmupjbiByLPbQ9N" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <div class="card-title">UltraPanel más liviano</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <iframe class="rounded" src="https://www.youtube.com/embed/J0iHOiNXHEU?si=GqSj5S64t97Knx1h" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Corta Fuego</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <iframe class="rounded" src="https://www.youtube.com/embed/5n2Ed7BTrcs?si=oz07of2Z5ZGwHF4c" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Fácil trasiego vertical</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="ratio ratio-16x9">
                            <iframe class="rounded" src="https://www.youtube.com/embed/bLbHrHvwDZ0?si=OgXo2Otp-4joR5pE" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Resistente a altas temperaturas</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
