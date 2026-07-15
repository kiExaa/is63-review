<?php
// database/seeders/UserSeeder.php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'kikiexaa7',
            'email'    => 'kie@gmail.com',
            'password' => Hash::make('kiki123'), // WAJIB di-hash!
        ]);

        $this->command->info('UserSeeder: Akun admin berhasil dibuat.');
        $this->command->info('Login: kie@gmail.com | kiki123');
    }
}
