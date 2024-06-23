<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    public function run()
    {
        Patient::create(['name' => 'Putri Kalisa', 'date_of_birth' => '2003-03-03', 'address' => 'Jln Gagak No 41', 'phone_number' => '081234567890', 'email' => 'putrikalisa@gmail.com']);
        Patient::create(['name' => 'Moana', 'date_of_birth' => '2002-02-02', 'address' => 'Jln Merak Jingga No 03', 'phone_number' => '089876543212', 'email' => 'moana@gmail.com']);
    }
}