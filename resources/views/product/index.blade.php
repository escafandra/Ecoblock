@extends('layouts.app')
@section('content')
    <section class="page-section">
        <div class="container mt-4">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Productos</h2>
                <h3 class="section-subheading text-muted">La mejor calidad a su disposición</h3>
            </div>
            <div class="row text-center">
                @foreach ($products as $product)
                    <div class="col-md-4">
                        <a class="portfolio-link" data-bs-toggle="modal" href="{{ '#product' . $product->id }}">
                            <img class="rounded-circle img-fluid" src="{{ $product->getFirstMediaUrl('images', 'preview')}}" alt="{{ $product->name }}"/>
                        </a>
                        <h4 class="my-3">{{ $product->name }}</h4>
                        <p class="text-muted">{{ $product->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @foreach($products as $product)
        <div class="portfolio-modal modal fade" id="{{ 'product' . $product->id }}" tabindex="-1" role="dialog"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal">
                        <img src="{{ asset('images/logos/close-icon.svg') }}" alt="Close modal"/>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">{{ $product->name }}</h2>
                                    <p class="item-intro text-muted">{{ $product->description }}</p>
                                    @if (count($product->getMedia('images')) > 1)
                                        <div id="{{ 'productCarousel' . $product->id }}" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ $product->getFirstMediaUrl('images', 'show') }}" class="d-block w-100" alt="{{ $product->name }}">
                                                </div>
                                                @for($i = 2; $i <= count($product->getMedia('images')); $i++)
                                                    <div class="carousel-item">
                                                        <img src="{{ $product->getMedia('images')[$i - 1]->getUrl('show') }}" class="d-block w-100" alt="{{ $product->name . $i }}">
                                                    </div>
                                                @endfor
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="{{ '#productCarousel' . $product->id }}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="{{ '#productCarousel' . $product->id }}" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    @else
                                        <img src="{{ $product->getFirstMediaUrl('images', 'show') }}" class="d-block w-100" alt="{{ $product->name }}">
                                    @endif
                                    <ul class="list-group list-group-flush mb-5">
                                        @foreach(json_decode($product->advantages) as $advantage)
                                            <li class="list-group-item">{{ $advantage }}</li>
                                        @endforeach
                                    </ul>
                                    <table class="table mb-5">
                                        <thead>
                                            <tr>
                                                <th scope="col">Característica</th>
                                                <th scope="col">Valor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(json_decode($product->datasheet, true) as $feature => $value)
                                                <tr>
                                                    <th>{{ $feature }}</th>
                                                    <td>{{ $value }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                            type="button">
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
