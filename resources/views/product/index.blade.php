<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ trans('navigation.catalog') }}
        </h2>
    </x-slot>
    <main class="my-8">
        <div class="container mx-auto px-6">
            <form action="{{ route('product.index') }}" method="GET" class="grid grid-cols-7 gap-3">
                <x-input id="search" type="text" name="search" class="col-span-6"/>
                <x-button class="row-span-2">
                    {{ __(trans('buttons.search')) }}
                </x-button>
            </form>
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">

                @foreach ($products as $product)
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover">
                            <a href="{{ route('product.show', $product) }}">
                                <img src="{{ $product->getFirstMediaUrl('images', 'preview')}}">
                            </a>
                        </div>
                        <div class="px-5 py-3" >
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            <span class="text-gray-500 mt-2">{{ $product->price }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="m-4">
                {{ $products->links() }}
            </div>
        </div>
    </main>
</x-app-layout>
