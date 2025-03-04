<?php

namespace Database\Seeders;

use App\Models\Blog2;
use App\Models\MyBlog;
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

        //API exercise
        Blog2::factory()->count(30)->create();




        ///MyBlog::factory(10)->create();



        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //$this->call(UserSeeder::class);
        // $this->call(ProductSeeder::class);
        // $this->call(CompanySeeder::class);

    }
}
