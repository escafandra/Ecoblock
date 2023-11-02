@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Services</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
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

@endsection
