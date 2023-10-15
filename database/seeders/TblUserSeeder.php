<?php

namespace Database\Seeders;

use App\Models\tblUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TblUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username' => 'Faridz',
                'role' => 'admin',
                'password' => Hash::make('123')
            ],
            [
                'username' => 'rijuy',
                'role' => 'operator',
                'password' => Hash::make('123')
            ]
        ];

        // looping data dengan foreach
        foreach ($userData as $user => $val) {
            tblUser::create($val);
        }
    }
}