<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\VpsPlans;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        VpsPlans::factory()->create([
            'name' => 'VPS Power Max 1',
            'cpu' => '2 Core',
            'ram' => '2 GB',
            'storage' => '50 GB SSD',
            'bandwidth' => '1 TB',
            'price' => 175000,
        ]);

        VpsPlans::factory()->create([
            'name' => 'VPS Power Max 2',
            'cpu' => '4 Core',
            'ram' => '4 GB',
            'storage' => '80 GB SSD',
            'bandwidth' => '1 TB',
            'price' => 350000,
        ]);

        VpsPlans::factory()->create([
            'name' => 'VPS Power Max 3',
            'cpu' => '6 Core',
            'ram' => '8 GB',
            'storage' => '100 GB SSD',
            'bandwidth' => '1 TB',
            'price' => 525000,
        ]);
    }
}
