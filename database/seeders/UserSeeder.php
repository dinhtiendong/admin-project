<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@vinasupport.com',
        //     'password' => bcrypt('123456'),
        // ]);
        //phai dong code cu lai  
        User::factory()->count(10)->create();
    }
}
