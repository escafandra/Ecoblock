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

        if ($request->has('images')) {
            $product->addMediaFromRequest('images')->toMediaCollection('images');
        }

        if ($request->has('video')) {
            $product->addMediaFromRequest('video')->toMediaCollection('video');
        }

        return $product;
    }
}
