<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name' => 'ahmed mohamed',
            'email' => 'ahmed.elesawy202020@gmail.com',
            'password' => Hash::make('015365820'),
        ]);
    }
}
