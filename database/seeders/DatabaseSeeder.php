<?php

namespace Database\Seeders;
use App\Models\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //User::factory(10)->has(Post::factory(2))->create();


        $this->call(categorySeeder::class);
        $this->call(subcategorySeeder::class);
        $this->call(itemSeeder::class);

}
}











