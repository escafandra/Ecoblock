<?php

namespace App\Actions;

use App\Models\Product;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProjectStoreAction
{
    public static function execute(Request $request, ?Model $model = null): Model
    {
        $product = $model ?? new Project();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->initial_date = $request->input('initial_date');
        $product->final_date = $request->input('final_date');
        $product->customer = $request->input('customer');

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
