@extends('layouts.app')
@section('content')
    <section class="page-section">
        <div class="container mt-4">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Proyectos</h2>
                <h3 class="section-subheading text-muted">Los resultados de nuestra maestría</h3>
            </div>
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="{{ '#project' . $project->id }}">
                                <img class="img-fluid rounded" src="{{ $project->getFirstMediaUrl('images', 'preview') }}" alt="{{ $project->name }}" />
                            </a>
                            <div class="portfolio-caption mt-1">
                                <div class="portfolio-caption-heading">{{ $project->name }}</div>
                                <div class="portfolio-caption-subheading text-muted">{{ $project->description }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @foreach($projects as $project)
        <div class="portfolio-modal modal fade" id="{{ 'project' . $project->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('images/logos/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{ $project->name }}</h2>
                                    <p class="item-intro text-muted">{{ $project->description }}</p>
                                    @if (count($project->getMedia('images')) > 1)
                                        <div id="{{ 'projectCarousel' . $project->id }}" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ $project->getFirstMediaUrl('images', 'show') }}" class="d-block w-100" alt="{{ $project->name }}">
                                                </div>
                                                @for($i = 2; $i <= count($project->getMedia('images')); $i++)
                                                    <div class="carousel-item">
                                                        <img src="{{ $project->getMedia('images')[$i - 1]->getUrl('show') }}" class="d-block w-100" alt="{{ $project->name . $i }}">
                                                    </div>
                                                @endfor
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="{{ '#projectCarousel' . $project->id }}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="{{ '#projectCarousel' . $project->id }}" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    @else
                                        <img src="{{ $project->getFirstMediaUrl('images', 'show') }}" class="d-block w-100" alt="{{ $project->name }}">
                                    @endif
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Cliente Satisfecho:</strong>
                                            {{ $project->customer }}
                                        </li>
                                        <li>
                                            <strong>Fecha de inicio:</strong>
                                            {{ $project->initial_date }}
                                        </li>
                                        <li>
                                            <strong>Fecha de finalización:</strong>
                                            {{ $project->final_date }}
                                        </li>
                                        @foreach($project->products as $product)
                                            @if($product)
                                                <li>
                                                    <strong>{{ $product->name . ':' }}</strong>
                                                    {{ $product->pivot->amount . ' ' . $product->measure }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
