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

        $product = Product::factory()->create([
            'name' => 'ULTRA Dry',
            'description' => 'Impermeabilizante a base de llantas recicladas, excelente textura y acabado con mayor resistencia a la intemperie y mayor efectividad a filtraciones',
            'price' => null,
            'advantages' => json_encode([' Impermeabilizante a base del reciclaje de llantas', 'No requiere mantenimiento', 'Mayor resistencia a la intemperie', 'Los rayos UV no afectan o deterioran su acabado.', 'No requiere calor para su instalación','Aplicación en frío']),
            'datasheet' => json_encode(['Tipo' => 'Impermeabilizante', 'Color' => 'Negro'])
        ]);

        $product->addMedia('public/images/products/ultra-dry.jpg')->preservingOriginal()->toMediaCollection('images');

        $product = Product::factory()->create([
            'name' => 'ULTRA Panel',
            'description' => 'Paneles prefabricados a base de Concreto Liviano, fibras sintéticas y reforzado con malla electro soldada, que posee una estructura alveolar de millones de micro celdas de aire y un sistema machihembrado de unión entre paneles. El acabado de la superficie permite que no sea necesario pañetar',
            'measure' => 'Metros Cuadrados',
            'price' => null,
            'advantages' => json_encode(['Menos densidad y peso', '4-7 Veces más aislamiento térmico', '2 Veces más aislamiento acustico', '90% Ahorro de agua', '30% Ahorro energético']),
            'datasheet' => json_encode(['Tipo' => 'Panel prefabricado', 'Color' => 'Gris', 'Ancho' => '50cm', 'Espesor' => '10cm', 'Altura' => 'Variable', 'Densidad' => '0.900 Ton/m3', 'Peso' => '90 Kg/m2']),
        ]);

        $product->addMedia('public/images/products/panel.png')->preservingOriginal()->toMediaCollection('images');

        Product::factory()->create([
            'enabled' => false,
            'name' => 'ULTRA Paint',
            'description' => 'Pintura blanca tipo 1 lavable fabricada a base de vinilo',
            'price' => null,
            'advantages' => json_encode(['Pintura blanca, tipo 1.', 'Base de vinilo', 'Lavable', 'No tiene Plomo', 'Adherente', 'Mayor calidad', 'Mayor cubrimiento', ' Más económica']),
            'datasheet' => json_encode(['Tipo' => 'Pintura blanca, tipo 1.', 'Base' => 'Vinilo'])
        ]);
    }
}
