<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\members;
use App\Models\vegetables;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    members::create([
        "name"=> "peter",
        "email"=> "peter123@gmail.com",
        "age"=> "35",
        "gender"=> "male",
        "phone_number"=> "1234567890",
        "address"=> "123 Main St",
        "city"=> "penang",
        "state"=> "BM",
    ]);
    members::create([
        "name"=> "jane",
        "email"=> "jane@gmail.com",
        "age"=> "25",
        "gender"=> "female",
        "phone_number"=> "1212121212121",
        "address"=> "123 Main St",
        "city"=> "johor",
        "state"=> "johor baru",
    ]);
    members::create([
        "name"=> "alex",
        "email"=> "alex@gmail.com",
        "age"=> "19",
        "gender"=> "male",
        "phone_number"=> "1332323232",
        "address"=> "123 Main St",
        "city"=> "kedah",
        "state"=> "kulim",
    ]);

    vegetables::create([
        "name"=> "potato",
        "mass"=> "200",
        "quantity"=> "45",
        "price"=> "12.50",
    ]);
    vegetables::create([
        "name"=> "carrot",
        "mass"=> "125",
        "quantity"=> "60",
        "price"=> "6.50",
    ]);
    vegetables::create([
        "name"=> "tomato",
        "mass"=> "300",
        "quantity"=> "12",
        "price"=> "6.50",
    ]);
    
    }
}


