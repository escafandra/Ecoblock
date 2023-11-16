<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $project = Project::factory()->create([
            'name' => 'Abby 193',
            'description' => 'Proyecto Abby 193',
            'initial_date' => Carbon::create(2023, 7, 27),
        ]);

        $project->addMedia('public/images/projects/abby-193/abby-193-1.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-2.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-3.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-4.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-5.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-6.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-7.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-8.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/abby-193/abby-193-9.jpg')->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Allegro 2',
            'description' => 'Proyecto Allegro 2',
        ]);

        $project->addMedia('public/images/projects/allegro-2/allegro-2-1.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/allegro-2/allegro-2-2.jpg')->preservingOriginal()->toMediaCollection('images');
        $project->addMedia('public/images/projects/allegro-2/allegro-2-3.png')->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Balcones San Luis',
            'description' => 'Proyecto Balcones San Luis',
        ]);

        $project->addMedia("public/images/projects/balcones-san-luis/balcones-san-luis-1.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/balcones-san-luis/balcones-san-luis-12.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/balcones-san-luis/balcones-san-luis-2.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/balcones-san-luis/balcones-san-luis-3.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/balcones-san-luis/balcones-san-luis-4.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/balcones-san-luis/balcones-san-luis-5.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/balcones-san-luis/balcones-san-luis-6.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/balcones-san-luis/balcones-san-luis-7.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/balcones-san-luis/balcones-san-luis-8.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/balcones-san-luis/balcones-san-luis-9.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/balcones-san-luis/balcones-san-luis-10.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/balcones-san-luis/balcones-san-luis-11.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/balcones-san-luis/balcones-san-luis-13.jpg")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Urban Chico',
            'description' => 'Proyecto Urban Chico',
        ]);

        $project->addMedia("public/images/projects/urban-chico/urban-chico-1.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/urban-chico/urban-chico-2.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/urban-chico/urban-chico-3.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/urban-chico/urban-chico-4.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/urban-chico/urban-chico-5.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/urban-chico/urban-chico-6.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/urban-chico/urban-chico-7.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/urban-chico/urban-chico-8.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/urban-chico/urban-chico-9.jpg")->preservingOriginal()->toMediaCollection('images');

        $project = Project::factory()->create([
            'name' => 'Taj 97',
            'description' => 'Proyecto Taj 97',
        ]);

        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-1.png")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-20.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-2.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-3.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-4.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-5.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-6.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-8.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-9.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-10.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-11.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-12.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-13.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-14.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-15.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-16.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-17.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-18.jpg")->preservingOriginal()->toMediaCollection('images');
        $project->addMedia("public/images/projects/taj-97/proyecto-taj97-19.jpg")->preservingOriginal()->toMediaCollection('images');
    }
}
