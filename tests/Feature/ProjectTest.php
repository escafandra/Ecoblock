<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    public function testItCanRenderIndexView(): void
    {
        Project::factory(100)->create();

        $response = $this->get(route('project.index'));

        $this->assertGuest();
        $response->assertOk();
        $this->assertDatabaseCount('projects', 100);
        $response->assertViewIs('project.index');
        $response->assertViewHas('projects');
    }
}
