<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $product = Product::factory()->create([
            'name' => 'ULTRA Pego',
            'description' => 'Cemento líquido para pegar paneles y bloques.  Mayor adherencia en un menor tiempo.',
            'price' => null,
            'advantages' => json_encode(['Preparación lista para usar', 'Bajo olor', 'Práctico', 'Cero desperdicio', 'Construcción en limpio', 'Rendimiento en obra', 'Excelente adherencia', 'Disminuye cargas muertas', 'No inflamable', 'No contaminante', 'Impermeable', 'Pega sobre amplia gama de materiales']),
            'datasheet' => json_encode(['Tipo' => 'Mortero a base de resina cremosa', 'Color' => 'Gris, Multicolor'])
        ]);

        $product->addMedia('public/images/products/ultra-pego.png')->preservingOriginal()->toMediaCollection('images');


        $product = Product::factory()->create([
            'name' => 'ULTRA Stucco',
            'description' => 'Pasta para paneles y bloques a base de resinas acrílicas con mayor adherencia y resistencia.',
            'price' => null,
            'advantages' => json_encode(['Preparación lista para usar', 'Bajo olor', 'Práctico', 'Cero desperdicio', 'Construcción en limpio', 'Rendimiento en obra', 'Excelente adherencia', 'Disminuye cargas muertas', 'No inflamable', 'No contaminante', 'Impermeable', 'Pega sobre amplia gama de materiales']),
            'datasheet' => json_encode(['Tipo' => 'Mortero a base de resina cremosa', 'Color' => 'Gris, Multicolor'])
        ]);

        $product->addMedia('public/images/products/ultra-stucco.png')->preservingOriginal()->toMediaCollection('images');


        $product = Product::factory()->create([
            'name' => 'ULTRA Tech Master',
            'description' => 'Mortero para friso de paneles interiores. Fácil aplicación, excelente acabado,',
            'price' => null,
            'advantages' => json_encode(['Preparación lista para usar', 'Bajo olor', 'Práctico', 'Cero desperdicio', 'Construcción en limpio', 'Rendimiento en obra', 'Excelente adherencia', 'Disminuye cargas muertas', 'No inflamable', 'No contaminante', 'Impermeable', 'Pega sobre amplia gama de materiales']),
            'datasheet' => json_encode(['Tipo' => 'Mortero a base de resina cremosa', 'Color' => 'Gris, Multicolor'])
        ]);

        $product->addMedia('public/images/products/ultra-tech-master.png')->preservingOriginal()->toMediaCollection('images');

    }
}
