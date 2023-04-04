<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Student;
use \App\Models\Teacher;
use \App\Models\Kelas;

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
        Teacher::create([
            'name' => 'Gisela Ramadinawati',
            'nip' => '2233445566',
            'nik' => '1122334455',
            'username' => 'gigisgisela',
            'password' => bcrypt('12345'),
            'level' => 'teacher',
        ]);
        Teacher::factory(12)->create();
        Student::factory(12)->create();

        Kelas::create([
            'name' => 'VII A',
        ]);
        Kelas::create([
            'name' => 'VII B',
        ]);
        Kelas::create([
            'name' => 'VIII A',
        ]);
        Kelas::create([
            'name' => 'VIII B',
        ]);
        Kelas::create([
            'name' => 'IX A',
        ]);
        Kelas::create([
            'name' => 'IX B',
        ]);
    }
}
