@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Proyectos</h2>
        <h3 class="section-subheading text-muted">Los resultados de nuestra maestría</h3>
    </div>
    <div class="row">
        @foreach($projects as $project)
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="portfolio-item">
                <a class="portfolio-link"  href="{{ route('project.show', $project) }}">
                    <img class="img-fluid" src="{{ $project->getFirstMediaUrl('images', 'preview') }}" alt="{{ $project->name }}" />
                </a>
                <div class="portfolio-caption">
                    <div class="portfolio-caption-heading">{{ $project->name }}</div>
                    <div class="portfolio-caption-subheading text-muted">{{ $project->description }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
