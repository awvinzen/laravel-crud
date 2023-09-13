<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::insert([
            'kodeguru' => '001',
            'namaguru' => 'agus waluyo',
            'mapel' => 'kesiswaan',
        ]);
    }
}
