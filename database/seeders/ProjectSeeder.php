<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $project = Project::factory()->create([
            'name' => 'Abby 193',
            'description' => 'Proyecto Abby 193',
        ]);

        $project->addMedia('public/images/projects/abby-193/abby-193-1.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-2.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-3.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-4.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-5.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-6.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-7.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-8.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-render.jpg')->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Allegro 2',
            'description' => 'Proyecto Allegro 2',
        ]);

        $project->addMedia('public/images/projects/allegro-2/allegro-2-1.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/allegro-2/allegro-2-2.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/allegro-2/allegro-2-render.png')->preservingOriginal()->toMediaCollection('images');
    }
}
