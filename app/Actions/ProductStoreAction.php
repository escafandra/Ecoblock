<?php

namespace App\Actions;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductStoreAction
{
    public static function execute(Request $request, ?Model $model = null): Model
    {
        $product = $model ?? new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        $product->save();

        return $product;
    }
}
