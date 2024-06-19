<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 3; $i++) {
                Product::create([
                    'name' => $category->name . ' Product ' . $i,
                    'category_id' => $category->id,
                    'description' => 'Description for ' . $category->name . ' Product ' . $i,
                    'stock' => rand(10,100),
                    'price' => rand(100, 1000),
                ]);
            }
        }
    }
}

