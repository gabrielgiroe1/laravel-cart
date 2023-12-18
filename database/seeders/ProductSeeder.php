<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Apple Macbook Pro 16',
                'details' => 'Apple M1 Max, 64CPU, 64GPU',
                'description' => 'MacBook Pro blasts forward with the M3, M3 Pro, and M3 Max chips. Built on 3 nanometer technology and featuring an all-new GPU architecture, they re the most advanced chips ever built for a personal computer. And each one brings more pro performance and capability.',
                'brand' => 'Apple',
                'price' => 2499,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Samsung Galaxy Book pro',
                'details' => '13.3 inch, 8GB, DDR4, SDRAM, 256GB',
                'description' => 'If you can dream it, you can do it with a remarkable PC that s brimming with power. With a slim, portable frame, you ll never be without phenomenal computing power no matter where you go.',
                'brand' => 'Samsung',
                'price' => 1400,
                'shipping_cost' => 25,
                'image_path' => 'storage/product2.png'
            ],
        ];
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
