<?php

namespace Database\Seeders;
use App\Models\Item;
use App\Models\Category;
use App\Models\Subcategory;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{

    public function run()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();

        $subitems = [
            [
                'name' => 'iPhone 12',
                'description' => 'The latest iPhone model with advanced features.',
                'price' => 999.99,
                'stock' => 10,
                'sub_category_id' => $subcategories->where('name', 'Mobile Phones')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Galaxy S21',
                'description' => 'A powerful Android smartphone with a stunning display.',
                'price' => 899.99,
                'stock' => 5,
                'sub_category_id' => $subcategories->where('name', 'Mobile Phones')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dell XPS 15',
                'description' => 'A high-performance laptop for professionals.',
                'price' => 1599.99,
                'stock' => 8,
                'sub_category_id' => $subcategories->where('name', 'Laptops')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HP Spectre x360',
                'description' => 'A versatile 2-in-1 laptop with a sleek design.',
                'price' => 1299.99,
                'stock' => 3,
                'sub_category_id' => $subcategories->where('name', 'Laptops')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Plain White T-Shirt',
                'description' => 'A basic white t-shirt for everyday wear.',
                'price' => 19.99,
                'stock' => 50,
                'sub_category_id' => $subcategories->where('name', 'T-Shirts')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Printed Summer Dress',
                'description' => 'A beautiful summer dress with a vibrant print.',
                'price' => 49.99,
                'stock' => 20,
                'sub_category_id' => $subcategories->where('name', 'Dresses')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
            // Add more items with their names, descriptions, prices, stock, and sub_category_id...
            $CatItems=
            [
                [
                'name' => 'Headphones',
                'description' => 'High-quality headphones for an immersive audio experience.',
                'price' => 99.99,
                'stock' => 15,
                'category_id' => $categories->where('name', 'Electronics')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jeans',
                'description' => 'Classic denim jeans for a casual look.',
                'price' => 59.99,
                'stock' => 30,
                'category_id' => $categories->where('name', 'Clothing')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smart Watch',
                'description' => 'A wearable device with various smart features.',
                'price' => 79.99,
                'stock' => 10,
                'category_id' => $categories->where('name', 'Electronics')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
            [
                'name' => 'Cookware Set',
                'description' => 'A comprehensive set of high-quality cookware for your kitchen.',
                'price' => 199.99,
                'stock' => 5,
                'category_id' => $categories->where('name', 'Home and Kitchen')->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more items...
        ];

        Item::insert($subitems);
        Item::insert($CatItems);
    }
}

