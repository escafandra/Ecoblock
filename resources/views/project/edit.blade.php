@extends('layouts.app')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ trans('buttons.edit').' '.__($project->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{ route('project.update', $project) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-label for="name" :value="__(trans('auth.name'))" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $project->name }}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="description" :value="__(trans('projects.description'))" />
                            <x-textarea id="description" class="block mt-1 w-full" name="description" required>
                                {{ __($project->description) }}
                            </x-textarea>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __(trans('buttons.save')) }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
