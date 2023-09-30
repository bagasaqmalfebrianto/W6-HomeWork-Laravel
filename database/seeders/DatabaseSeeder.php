<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::Create([
            'name' => 'Bagas',
            'email' => 'bagas@gmail.com',
            'no_telp' =>'0812',
            'saldo'=>'1000000',
            'password'=>'12345'
        ]);
        User::Create([
            'name' => 'Ichsan',
            'email' => 'Ichsan@gmail.com',
            'no_telp' =>'0813',
            'saldo'=>'2000000',
            'password'=>'12345'
        ]);
        User::Create([
            'name' => 'Andhika',
            'email' => 'andhika@gmail.com',
            'no_telp' =>'0813',
            'saldo'=>'3000000',
            'password'=>'12345'
        ]);
        User::Create([
            'name' => 'Fahmi',
            'email' => 'fahmi@gmail.com',
            'no_telp' =>'0814',
            'saldo'=>'4000000',
            'password'=>'12345'
        ]);
        User::Create([
            'name' => 'Hali',
            'email' => 'hali@gmail.com',
            'no_telp' =>'0815',
            'saldo'=>'5000000',
            'password'=>'12345'
        ]);
    }
}
