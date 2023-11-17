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
            ->where('enabled', true)
            ->orderBy('name')
            ->paginate(20);

        $products->appends(['search' => $request->query('search')]);

        return view('product.index', compact('products'));
    }
}
