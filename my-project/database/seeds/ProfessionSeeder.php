<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Profession;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Profession::create([
            "title" => "Desarrollaror Front"
        ]);

        DB::table("profession")->insert([
            "title" => "Graphic Designer",
        ]);

        DB::table("profession")->insert([
            "title" => "Front-end Developer"
        ]);

        DB::table('profession')->insert([
            "title" => "Back-end Developer"
        ]);

        factory(Profession::class)->times(17)->create();
    }
}
