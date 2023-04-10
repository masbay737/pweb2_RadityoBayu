<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::insert([
        //     'name' => 'test',
        //     'email' => 'test@gmail.com',
        //     'password' => Hash::make('test1234'),
        // ]);

        User::create([
            'role_id' => '1',
            'nama' => 'radt',
            'email' => 'radit@gmail.com',
            'password' => Hash::make('radit1234'),
        ]);
    }
}
