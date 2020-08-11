<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use \App\Profession;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $professionId = Profession::where("title", "Desarrollaror Front")->value("id");


        User::create([
            "name" => "Adan",
            "email" => "adan@gmail.com",
            "is_admin" => true,
            "password" => bcrypt("123"),
            "profession_id" => 1,

        ]);


        factory(User::class)->create([
            "profession_id" => $professionId
        ]);

        factory(User::class, 30)->create([
            "name" => "Bebelin"
        ]);

        // User::create([
        //     "name" => "Eva",
        //     "email" => "eva@gmail.com",
        //     "password" => bcrypt("123"),
        //     "profession_id" => 1,

        // ]);

        // User::create([
        //     "name" => "Cain",
        //     "email" => "cain@gmail.com",
        //     "password" => bcrypt("123"),
        //     "profession_id" => 2,

        // ]);


    }
}
