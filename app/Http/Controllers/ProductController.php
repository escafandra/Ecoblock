<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
