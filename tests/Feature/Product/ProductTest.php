<?php

namespace Tests\Feature\Product;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    public function testItCanShowCreateView(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('product.create'));

        $this->assertAuthenticated();
        $response->assertOk();
        $response->assertViewIs('products.create');
    }
    public function testItCanCreateNewProduct(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('product.store'), [
            'name' => 'testingName',
            'description' => 'testingDescription',
            'price' => 1000,
            'advantages' => json_encode(['data' => ['advantage 1', 'advantage 2']]),
            'datasheet' => json_encode(['feature 1' => 'value 1', 'feature 2' => 'value 2']),
        ]);

        $response->assertRedirect();
        $this->assertAuthenticated();
        $this->assertDatabaseCount('products', 1);

        $newProduct = Product::where('name', 'testingName')->first();

        $this->assertEquals('testingName', $newProduct->name);
        $this->assertEquals('testingDescription', $newProduct->description);
        $this->assertEquals(1000, $newProduct->price);

        $advantages = json_decode($newProduct->advantages, true);
        $this->assertIsArray($advantages);
        $this->assertArrayHasKey('data', $advantages);
        $this->assertCount(2, $advantages['data']);

        $datasheet = json_decode($newProduct->datasheet, true);
        $this->assertIsArray($datasheet);
        $this->assertCount(2, $datasheet);
        $this->assertEquals('value 1', $datasheet['feature 1']);
        $this->assertEquals('value 2', $datasheet['feature 2']);
    }
    public function testItCanShowAllProducts(): void
    {
        Product::factory(100)->create();

        $response = $this->post(route('product.index'));

        $this->assertAuthenticated();
        $response->assertOk();
        $this->assertDatabaseCount('products', 100);
        $response->assertViewIs('product.index');
    }

    public function testItCanShowEditView(): void
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $response = $this->actingAs($user)->get(route('product.edit', $product));

        $this->assertDatabaseCount('products', 1);
        $this->assertAuthenticated();
        $response->assertOk();
        $response->assertViewIs('products.edit');
    }

    public function testItCanUpdateProduct(): void
    {
        $product = Product::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->put(route('product.update', $product), [
            'name' => 'testingName',
            'description' => 'testingDescription',
            'price' => 1000,
            'advantages' => json_encode(['data' => ['advantage 1', 'advantage 2']]),
            'datasheet' => json_encode(['feature 1' => 'value 1', 'feature 2' => 'value 2']),
        ]);

        $productUpdated = Product::findOrFail($product->id);

        $response->assertRedirect();
        $this->assertAuthenticated();
        $this->assertDatabaseCount('products', 1);
        $this->assertEquals('testingName', $productUpdated->name);
        $this->assertEquals('testingDescription', $productUpdated->description);
        $this->assertEquals(1000, $productUpdated->price);

        $advantages = json_decode($productUpdated->advantages, true);
        $this->assertIsArray($advantages);
        $this->assertArrayHasKey('data', $advantages);
        $this->assertCount(2, $advantages['data']);

        $datasheet = json_decode($productUpdated->datasheet, true);
        $this->assertIsArray($datasheet);
        $this->assertCount(2, $datasheet);
        $this->assertEquals('value 1', $datasheet['feature 1']);
        $this->assertEquals('value 2', $datasheet['feature 2']);

    }
    public function testItCanShowDetailView(): void
    {
        $product = Product::factory()->create();

        $response = $this->get(route('product.show', $product));

        $this->assertDatabaseCount('products', 1);
        $this->assertGuest();
        $response->assertOk();
        $response->assertViewIs('products.show');
    }

    public function testItCanDeleteProduct(): void
    {
        $product = Product::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->delete(route('product.destroy', $product));

        $response->assertRedirect();
        $this->assertAuthenticated();
        $this->assertDatabaseCount('products', 0);
    }
}
