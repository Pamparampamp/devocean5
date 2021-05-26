<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
  public function run(){

        DB::table('users')->insert([
        'name' => 'Mindaugas',
        'email' => 'mindaugas@gmail.com',
        'password' => Hash::make('mindaugas'),
        ]);

        DB::table('users')->insert([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => Hash::make('password'),
]);
}
}
