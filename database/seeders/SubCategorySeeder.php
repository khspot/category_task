<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $subcategories = [
                [
                    'name' => 'Mobile Phones',
                    'description' => 'Explore a wide range of mobile phones.',
                    'category_id' => $categories->where('name', 'Electronics')->first()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Laptops',
                    'description' => 'Find the perfect laptop for your needs.',
                    'category_id' => $categories->where('name', 'Electronics')->first()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'T-Shirts',
                    'description' => 'Discover trendy and comfortable t-shirts.',
                    'category_id' => $categories->where('name', 'Clothing')->first()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Dresses',
                    'description' => 'Browse a collection of elegant dresses for various occasions.',
                    'category_id' => $categories->where('name', 'Clothing')->first()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Kitchen Appliances',
                    'description' => 'Equip your kitchen with the latest appliances.',
                    'category_id' => $categories->where('name', 'Home and Kitchen')->first()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Cookware',
                    'description' => 'Find high-quality cookware for your culinary adventures.',
                    'category_id' => $categories->where('name', 'Home and Kitchen')->first()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Fiction',
                    'description' => 'Immerse yourself in captivating fictional stories.',
                    'category_id' => $categories->where('name', 'Books')->first()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Non-Fiction',
                    'description' => 'Discover informative non-fiction books on various topics.',
                    'category_id' => $categories->where('name', 'Books')->first()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Beauty Products',
                    'description' => 'Enhance your beauty with a range of beauty products.',
                    'category_id' => $categories->where('name', 'Beauty and Personal Care')->first()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Fitness Equipment',
                    'description' => 'Get in shape with a variety of fitness equipment.',
                    'category_id' => $categories->where('name', 'Sports and Fitness')->first()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            
        ];

        Subcategory::insert($subcategories);
    }
    }


