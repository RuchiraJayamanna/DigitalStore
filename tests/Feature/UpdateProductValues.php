<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;
use App\Models\Category;

class UpdateProductValues extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();

        $this->artisan('db:seed', ['--class' => 'CategorySeeder']);
        $this->artisan('db:seed', ['--class' => 'ProductSeeder']);
    }

    public function test_product_stock_and_price_update()
    {
        $product = Product::first();
        $initialStock = $product->stock;
        $initialPrice = $product->price;

        $this->artisan('update:product-stock-price');

        $product->refresh();
        $this->assertEquals($initialStock - 1, $product->stock);
        $this->assertEquals(max($initialPrice - 2, 0), $product->price);
    }

    public function test_gadgets_price_increase_when_stock_low()
    {
        $category = Category::where('name', 'Gadgets')->first();
        $product = Product::create([
            'name' => 'Test Gadget',
            'category_id' => $category->id,
            'description' => 'Test description',
            'stock' => 8,
            'price' => 100,
        ]);

        $this->artisan('update:product-stock-price');

        $product->refresh();
        $this->assertEquals(7, $product->stock);
        $this->assertEquals(115, $product->price); 
    }

    public function test_gadgets_price_zero_when_stock_zero()
    {
        $category = Category::where('name', 'Gadgets')->first();
        $product = Product::create([
            'name' => 'Test Gadget',
            'category_id' => $category->id,
            'description' => 'Test description',
            'stock' => 0,
            'price' => 100,
        ]);

        $this->artisan('update:product-stock-price');

        $product->refresh();
        $this->assertEquals(0, $product->stock);
        $this->assertEquals(0, $product->price);
    }
}
