<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            "name" => "Adan",
            "email" => "adan@gmail.com",
            "password" => bcrypt("123"),
            "profession_id" => 1,

        ]);


        // DB::table('users')->insert([
        //     "name" => "Adan",
        //     "email" => "adan@gmail.com",
        //     "password" => bcrypt("123"),
        //     "profession_id" => 1,
        // ]);
    }
}
