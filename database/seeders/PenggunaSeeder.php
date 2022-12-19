<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengguna::query()->create([
            'name' => 'Fulan',
            'email' => 'fulan@gmail.com',
            'password' => 'fulan123'
        ]);
    }
}
