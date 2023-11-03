@extends('layouts.app')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(trans('buttons.show') . ' ' . $project->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        <li>
                            <img src="{{ $project->getFirstMediaUrl('images', 'preview')}}">
                        </li>
                        <li>
                            <h3>Id: {{ $project->id }}</h3>
                        </li>
                        <li>
                            <h3>{{ trans('projects.name') . ': ' . $project->name }}</h3>
                        </li>
                        <li>
                            <h3>{{ trans('projects.description') . ': ' . $project->description }}</h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
