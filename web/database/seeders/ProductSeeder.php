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
        Product::create([
            'title' => 'Lorem ipsum dolor sit amet',
            'price' => 12.34,
            'quantity' => 5,
            'category_id' => 1,
            'brand_id' => 1,
            'description' => 'Commodo ullamco non nostrud consectetur irure consequat cupidatat id occaecat eu. Tempor dolore enim eiusmod mollit. Ex labore nostrud nulla quis dolore veniam minim tempor Lorem magna. Ullamco occaecat nostrud deserunt voluptate.'
        ]);
    }
}
