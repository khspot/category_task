<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Electronics',
                'description' => 'Category for electronic devices.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Clothing',
                'description' => 'Category for clothing and apparel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Home and Kitchen',
                'description' => 'Category for home and kitchen products.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Books',
                'description' => 'Category for books and literature.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beauty and Personal Care',
                'description' => 'Category for beauty and personal care products.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sports and Fitness',
                'description' => 'Category for sports and fitness equipment.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Toys and Games',
                'description' => 'Category for toys and games.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Automotive',
                'description' => 'Category for automotive parts and accessories.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Health and Wellness',
                'description' => 'Category for health and wellness products.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pet Supplies',
                'description' => 'Category for pet supplies and accessories.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Furniture',
                'description' => 'Category for furniture and home decor.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jewelry',
                'description' => 'Category for jewelry and accessories.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Groceries',
                'description' => 'Category for grocery items.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Stationery',
                'description' => 'Category for stationery and office supplies.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        Category::insert($categories);
    }
}

