<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'string|max:50',
            'description' => 'string|max:1000',
            'price' => 'integer|max:9999999',
            'advantages' => 'json',
            'datasheet' => 'json',
        ];
    }
}
