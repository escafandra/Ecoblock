<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function testItCanRenderIndexView(): void
    {
        Product::factory(100)->create();

        $response = $this->get(route('product.index'));

        $this->assertGuest();
        $response->assertOk();
        $this->assertDatabaseCount('products', 100);
        $response->assertViewIs('product.index');
        $response->assertViewHas('products');
    }

    public function testItCanRenderCreateView(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('product.create'));

        $this->assertAuthenticated();
        $response->assertOk();
        $response->assertViewIs('product.create');
    }
    public function testItCanStoreAProduct(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('product.store'), [
            'name' => 'testingName',
            'description' => 'testingDescription',
            'price' => 1000,
            'advantages' => json_encode(['data' => ['advantage 1', 'advantage 2']]),
            'datasheet' => json_encode(['feature 1' => 'value 1', 'feature 2' => 'value 2']),
            'images' => [UploadedFile::fake()->image('testing-name-1.jpg'), UploadedFile::fake()->image('testing-name-2.png')],
            'video' => UploadedFile::fake()->create('video.mp4')
        ]);

        $response->assertRedirect();
        $this->assertAuthenticated();
        $this->assertDatabaseCount('products', 1);

        $product = Product::first();

        $this->assertEquals('testingName', $product->name);
        $this->assertEquals('testingDescription', $product->description);
        $this->assertEquals(1000, $product->price);
    }

    public function testItCanRenderEditView(): void
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $response = $this->actingAs($user)->get(route('product.edit', $product));

        $this->assertAuthenticated();
        $response->assertOk();
        $this->assertDatabaseCount('products', 1);
        $response->assertViewIs('product.edit');
        $response->assertViewHas('product');
    }

    public function testItCanUpdateProduct(): void
    {
        $product = Product::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->put(route('product.update', $product), [
            'name' => 'Testing Name',
            'description' => 'Testing Description',
            'price' => 1000,
            'advantages' => json_encode(['data' => ['advantage 1', 'advantage 2']]),
            'datasheet' => json_encode(['feature 1' => 'value 1', 'feature 2' => 'value 2']),
            'images' => [UploadedFile::fake()->image('testing-name-1.jpg'), UploadedFile::fake()->image('testing-name-2.png')],
            'video' => UploadedFile::fake()->create('video.mp4')
        ]);

        $product = Product::findOrFail($product->id);

        $response->assertRedirect();
        $this->assertAuthenticated();
        $this->assertDatabaseCount('products', 1);
        $this->assertEquals('Testing Name', $product->name);
        $this->assertEquals('Testing Description', $product->description);
        $this->assertEquals(1000, $product->price);
    }
    public function testItCanRenderShowView(): void
    {
        $product = Product::factory()->create();

        $response = $this->get(route('product.show', $product));

        $this->assertGuest();
        $response->assertOk();
        $this->assertDatabaseCount('products', 1);
        $response->assertViewIs('product.show');
        $response->assertViewHas('product');
    }

    public function testItCanDeleteProduct(): void
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $response = $this->actingAs($user)->delete(route('product.destroy', $product));

        $response->assertRedirect();
        $this->assertAuthenticated();
        $this->assertDatabaseCount('products', 0);
    }
}
