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

    public function testItCanRenderCreateView(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('project.create'));

        $this->assertAuthenticated();
        $response->assertOk();
        $response->assertViewIs('project.create');
    }
    public function testItCanStoreAProject(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('project.store'), [
            'name' => 'testingName',
            'description' => 'testingDescription',
            'images' => [UploadedFile::fake()->image('testing-name-1.jpg'), UploadedFile::fake()->image('testing-name-2.png')],
            'video' => UploadedFile::fake()->create('video.mp4')
        ]);

        $response->assertRedirect();
        $this->assertAuthenticated();
        $this->assertDatabaseCount('projects', 1);

        $project = Project::first();

        $this->assertEquals('testingName', $project->name);
        $this->assertEquals('testingDescription', $project->description);
    }

    public function testItCanRenderEditView(): void
    {
        $user = User::factory()->create();
        $project = Project::factory()->create();

        $response = $this->actingAs($user)->get(route('project.edit', $project));

        $this->assertAuthenticated();
        $response->assertOk();
        $this->assertDatabaseCount('projects', 1);
        $response->assertViewIs('project.edit');
        $response->assertViewHas('project');
    }

    public function testItCanUpdateProject(): void
    {
        $project = Project::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->put(route('project.update', $project), [
            'name' => 'testingName',
            'description' => 'testingDescription',
            'images' => [UploadedFile::fake()->image('testing-name-1.jpg'), UploadedFile::fake()->image('testing-name-2.png')],
            'video' => UploadedFile::fake()->create('video.mp4')
        ]);

        $project = Project::findOrFail($project->id);

        $response->assertRedirect();
        $this->assertAuthenticated();
        $this->assertDatabaseCount('projects', 1);
        $this->assertEquals('testingName', $project->name);
        $this->assertEquals('testingDescription', $project->description);
    }
    public function testItCanRenderShowView(): void
    {
        $project = Project::factory()->create();

        $response = $this->get(route('project.show', $project));

        $this->assertGuest();
        $response->assertOk();
        $this->assertDatabaseCount('projects', 1);
        $response->assertViewIs('project.show');
        $response->assertViewHas('project');
    }

    public function testItCanDeleteProject(): void
    {
        $user = User::factory()->create();
        $project = Project::factory()->create();

        $response = $this->actingAs($user)->delete(route('project.destroy', $project));

        $response->assertRedirect();
        $this->assertAuthenticated();
        $this->assertDatabaseCount('projects', 0);
    }
}
