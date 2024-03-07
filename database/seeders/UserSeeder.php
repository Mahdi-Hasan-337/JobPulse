<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    public function run() {
        DB::table('users')->insert([
            [
                'name' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'usertype' => 'system',
                'role' => 'superadmin',
                'verify' => 'verified',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'usertype' => 'system',
                'role' => 'admin',
                'verify' => 'verified',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'manager',
                'email' => 'manager@gmail.com',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'usertype' => 'system',
                'role' => 'manager',
                'verify' => 'verified',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'verifier',
                'email' => 'verifier@gmail.com',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'usertype' => 'system',
                'role' => 'verifier',
                'verify' => 'verified',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'mamber',
                'email' => 'mamber@gmail.com',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'usertype' => 'system',
                'role' => 'member',
                'verify' => 'verified',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'company1',
                'email' => 'company1@gmail.com',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'usertype' => 'company',
                'role' => 'member',
                'verify' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'company2',
                'email' => 'company2@gmail.com',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'usertype' => 'company',
                'role' => 'member',
                'verify' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'candidate1',
                'email' => 'candidate1@gmail.com',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'usertype' => 'candidate',
                'role' => 'member',
                'verify' => 'verified',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'candidate2',
                'email' => 'candidate2@gmail.com',
                'password' => Hash::make('123'),
                'email_verified_at' => now(),
                'usertype' => 'candidate',
                'role' => 'member',
                'verify' => 'verified',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
