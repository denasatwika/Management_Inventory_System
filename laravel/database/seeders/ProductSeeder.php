<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Product::create([
            "name" => "Produk 1",
            "description" => "ang-ang-ang",
            "sku" => "B001",
            "stock" => "3",
            "category_id" => 1,

        ]);
    }
}
