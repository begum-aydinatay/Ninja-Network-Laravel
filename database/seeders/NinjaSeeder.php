<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ninja;

class NinjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * When migration is made, seeders use the factory to automatically populate the database with dummy data.
     */
    public function run(): void
    {
        Ninja::factory()->count(50)->create();
    }
}
