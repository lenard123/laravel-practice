<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'id' => 1, 
            'firstname' => 'Lenard', 
            'lastname' => 'Mangay-ayam',
            'email' => 'lenard.mangayayam@gmail.com',
            'password' => bcrypt('lenard0727'),
            'type' => 'admin',
        ]);
        Product::create(['name' => 'Shabu', 'quantity' => 10000, 'price' => 500.25, 'user_id' => 1]);
        Product::create(['name' => 'Sisig', 'quantity' => 574, 'price' => 80.50, 'user_id' => 1]);
        Product::create(['name' => 'Lumia', 'quantity' => 74, 'price' => 20, 'user_id' => 1]);
        Product::create(['name' => 'Shawarma', 'quantity' => 56, 'price' => 75, 'user_id' => 1]);
        Product::create(['name' => 'Shomai', 'quantity' => 10000, 'price' => 10, 'user_id' => 1]);
    }
}
