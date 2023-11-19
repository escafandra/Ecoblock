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
}
