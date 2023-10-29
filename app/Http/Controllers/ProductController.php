<?php

namespace App\Http\Controllers;

use App\Actions\ProductStoreAction;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $products = Product::search($request->query('search'))
            ->orderBy('name')
            ->paginate(20);

        $products->appends(['search' => $request->query('search')]);

        return view('product.index', compact('products'));
    }

    public function create(): View
    {
        return view('product.create');
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        ProductStoreAction::execute($request);

        return redirect(route('product.index'));
    }

    public function show(Product $product): View
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product): View
    {

        return view('product.edit', compact('product'));
    }

    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        ProductStoreAction::execute($request, $product);

        return redirect(route('product.index'));
    }

    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect(route('product.index'));
    }
}
