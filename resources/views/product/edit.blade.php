@extends('layouts.app')
@section('content')
    <section class="page-section">
        <div class="container mt-4">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <x-validation-errors class="mb-4" :errors="$errors" />
                            <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div>
                                    <x-label for="name" :value="__(trans('auth.name'))" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $product->name }}" required autofocus />
                                </div>
                                <div class="mt-4">
                                    <x-label for="description" :value="__(trans('products.description'))" />
                                    <x-textarea id="description" class="block mt-1 w-full" name="description" required>
                                        {{ __($product->description) }}
                                    </x-textarea>
                                </div>
                                <div class="mt-4">
                                    <x-label for="price" :value="__(trans('products.price'))" />
                                    <x-input id="price" class="block mt-1 w-full" type="text" name="price" value="{{ $product->price }}" required />
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
        </div>
    </section>
@endsection
