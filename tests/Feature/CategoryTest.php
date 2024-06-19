<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Category;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_categories_page_is_accessible_to_authenticated_users()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/categories');
        $response->assertStatus(200);
    }

    public function test_categories_page_is_not_accessible_to_guests()
    {
        $response = $this->get('/categories');
        $response->assertRedirect('/login');
    }

    public function test_user_can_create_category()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/categories', [
            'name' => 'New Category',
        ]);

        $response->assertRedirect('/categories');
        $this->assertDatabaseHas('categories', ['name' => 'New Category']);
    }

    public function test_user_can_update_category()
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();

        $response = $this->actingAs($user)->put("/categories/{$category->id}", [
            'name' => 'Updated Category',
        ]);

        $response->assertRedirect('/categories');
        $this->assertDatabaseHas('categories', ['name' => 'Updated Category']);
    }

    public function test_user_can_delete_category()
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();

        $response = $this->actingAs($user)->delete("/categories/{$category->id}");

        $response->assertRedirect('/categories');
        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    }
}
