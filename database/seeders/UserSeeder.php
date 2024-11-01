<?php

namespace Database\Seeders;

use App\Models\Api\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Str::random(10); // Генерируем случайный пароль длиной 10 символов

        $data_user = [
            'name'              => 'TEST',
            'email'             => 'user@gmail.com',
            'password'          => Hash::make($password),
            'email_verified_at' => Carbon::now()
        ];

        $user = User::query()->where(['email' => $data_user['email']])->first();

        if(!is_null($user)){
            return;
        }

        $user = User::create($data_user);

        $this->command->info("User created with password: $password");
    }
}
