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
                    <img class="rounded-circle img-fluid" src="{{ $product->getFirstMediaUrl('images', 'preview')}}" alt="{{ $product->name }}" />
                    <h4 class="my-3">{{ $product->name }}</h4>
                    <p class="text-muted">{{ $product->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
