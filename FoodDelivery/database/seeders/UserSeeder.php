<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
 
    public function run(): void
    {
        User::create([
            'name' => 'Test admin',
            'phone' => '0123456789',
            'province_id' => '01',
            'district_id' => '001',
            'ward_id' => '0001',
            'address' => '123 Test Street',
            'birthday' => '2000-01-01',
            'img' => 'https://i.pinimg.com/736x/f9/7d/cc/f97dcc1f4c7d2e4ceb47b57dc13060c1.jpg',
            'description' => 'This is a test account.',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123'), // Mật khẩu: password
            'remember_token' => Str::random(10),
            'role'=> 'admin'
        ]);
        User::create([
            'name' => 'Test User ',
            'phone' => '0123456789',
            'province_id' => '01',
            'district_id' => '001',
            'ward_id' => '0001',
            'address' => '123 Test Street',
            'birthday' => '2000-01-01',
            'img' => 'https://i.pinimg.com/736x/86/2c/4b/862c4b7bd4a5ae15043212f65f6ebe3d.jpg',
            'description' => 'This is a test account.',
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123'), // Mật khẩu: password
            'remember_token' => Str::random(10),
            'role'=> 'user'
        ]);
       User::factory()->count(1000)->create();
    }
}
