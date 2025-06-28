<?php

namespace Database\Seeders;

use App\Models\Resident;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Desa Ryan',
            'email' => 'admin@gmail.com',
            'password' => 'password',
            'status' => 'approved',
            'role_id' => '1', // => 'Admin'
        ]);

        User::create([
            'id' => 4,
            'name' => 'Popular Items',
            'email' => 'pop@gmail.com',
            'password' => 'pop123',
            'status' => 'approved',
            'role_id' => '2',
        ]);

        Resident::create([
            'user_id' => 4,
            'nik' => '1612156475354657',
            'name' => 'Ryan Restu',
            'gender' => 'male',
            'birth_date' => '2112-12-21',
            'birth_place' => 'Baturaja',
            'address' => 'Baturaja',
            'marital_status' => 'married',
        ]);
    }
}
