<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Product::with('category')->get()->map(function($product) {
            return [
                'ID' => $product->id,
                'Name' => $product->name,
                'Category' => $product->category->name,
                'Description' => $product->description,
                'Stock' => $product->stock,
                'Price' => $product->price,
                'Created At' => $product->created_at,
                'Updated At' => $product->updated_at,
            ];
        });
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Category',
            'Description',
            'Stock',
            'Price',
            'Created At',
            'Updated At'
        ];
    }
}
