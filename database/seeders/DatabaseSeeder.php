<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Status::created(['title' => 'новая']);
        Status::created(['title' => 'в процессе']);
        Status::created(['title' => 'завершена']);
        Status::created(['title' => 'отменена']);

        User::firstOrCreate(
            [
                'firstname' => 'Admin',
                'middlename' => 'Admin',
                'lastname' => 'Admin',
                'email' => 'admin@example.com',
                'login' => 'administrator',
                'password' => Hash::make('administrator'),
                'tel' => '+79999999999',
                'role' => 'admin',

            ]);
    }
}
