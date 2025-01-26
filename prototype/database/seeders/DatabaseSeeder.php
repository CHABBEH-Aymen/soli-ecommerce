<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Aymen',
        //     'email' => 'test@example.com',
        // ]);
        Product::insert([
            [
                'img' => 'https://via.placeholder.com/150',
                'title' => 'Product 1',
                'desc' => 'This is the description for Product 1.',
                'price'=>200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'https://via.placeholder.com/150',
                'title' => 'Product 2',
                'desc' => 'This is the description for Product 2.',
                'price'=>300,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'https://via.placeholder.com/150',
                'title' => 'Product 3',
                'desc' => 'This is the description for Product 3.',
                'price'=>650,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
