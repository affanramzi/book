<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()->count(5)->create();
        User::create([
            'email' => 'fadloer@gmail.com',
            'name' => 'Fadlur',
            'password' => Hash::make('123258'),
            'status' => 'aktif',
        ]);
    }
}
