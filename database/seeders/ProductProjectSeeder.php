<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductProjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product_project')->insert([
            [
                'product_id' => Product::where('name', 'ULTRA Panel')->firstOrFail()->id,
                'project_id' => Project::where('name', 'Abby 193')->firstOrFail()->id,
                'amount' => 4660,
            ]
        ]);
    }
}
