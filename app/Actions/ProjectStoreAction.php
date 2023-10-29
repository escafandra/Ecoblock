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

        $product->save();

        return $product;
    }
}
