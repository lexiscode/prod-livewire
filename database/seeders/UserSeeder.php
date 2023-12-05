<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Code With Lexis',
            'email' => 'info@codewithlexis.com',
            'password' => '$2y$10$xQRziPU4XLAuQKS6Cjk1COvvxLWtKFg1itd/gZLIupMw/e6449ioK' //unlockme123
        ]);
    }
}
