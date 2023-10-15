<?php

namespace Database\Seeders;

use App\Models\JenisSurat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenisData = [
            ['jenis_surat' => 'DISPENSASI'],
            ['jenis_surat' => 'CINTA'],
        ];

        foreach ($jenisData as $data) {
            JenisSurat::create($data);
        }
    }
}