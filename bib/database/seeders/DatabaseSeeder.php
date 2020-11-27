<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nandini Hotwani',
            'email' => 'bakedinbombay.co@gmail.com',
            'mobile_number' => '7666998477',
            'password' => Hash::make('bib@16/3'),
            'user_type' => 'admin',
            'address' => 'Balaram Babu Khedekar Marg, Ram nagar, Wadala West, Wadala, Mumbai, Maharashtra 400031',
        ]);
    }
}
