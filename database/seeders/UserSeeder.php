<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        return \App\Models\User::create(
            [
                'name'=>'Abdurauf',
                'email'=>'admin@admin.com',
                'password'=>Hash::make('12345678'),
            ]
            );
    }
}
