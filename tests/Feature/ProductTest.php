<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_products_page_is_accessible_to_authenticated_users()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/products');
        $response->assertStatus(200);
    }

    public function test_products_page_is_not_accessible_to_guests()
    {
        $response = $this->get('/products');
        $response->assertRedirect('/login');
    }

    public function test_user_can_create_product()
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();

        $response = $this->actingAs($user)->post('/products', [
            'name' => 'New Product',
            'category_id' => $category->id,
            'description' => 'Product description',
            'stock' => 10,
            'price' => 100,
        ]);

        $response->assertRedirect('/products');
        $this->assertDatabaseHas('products', ['name' => 'New Product']);
    }

    public function test_user_can_update_product()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $response = $this->actingAs($user)->put("/products/{$product->id}", [
            'name' => 'Updated Product',
            'category_id' => $product->category_id,
            'description' => 'Updated description',
            'stock' => 15,
            'price' => 150,
        ]);

        $response->assertRedirect('/products');
        $this->assertDatabaseHas('products', ['name' => 'Updated Product']);
    }

    public function test_user_can_delete_product()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $response = $this->actingAs($user)->delete("/products/{$product->id}");

        $response->assertRedirect('/products');
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
