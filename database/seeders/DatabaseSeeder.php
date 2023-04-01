<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'M Yudha Pamungkas',
            'nik' => '123456789',
            'username' => 'yudhapamungkas',
            'password' => bcrypt('12345'),
            'level' => 'admin',
        ]);
        User::factory(2)->create();
        Student::factory(2)->create();
    }
}
