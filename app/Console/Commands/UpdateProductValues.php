<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\Category;

class UpdateProductValues extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update stock and price of products daily';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $products = Product::all();

        foreach ($products as $product) {
            $product->stock -= 1;

            if ($product->category->name == 'Gadgets') {
                if ($product->stock <= 0) {
                    $product->price = 0;
                } elseif ($product->stock <= 8) {
                    $product->price *= 1.15;
                } else {
                    $product->price -= 2;
                }
            } else {
                $product->price -= 2;
            }

            if ($product->price < 0) {
                $product->price = 0;
            }

            $product->save();
        }

        $this->info('Product stock and price updated successfully.');
    }
}
