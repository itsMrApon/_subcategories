<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use App\Models\listings;
use App\Models\switchtoswag;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        
    }
}
