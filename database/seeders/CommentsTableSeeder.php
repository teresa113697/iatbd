<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'comment' => "Deze oppas heeft heel veel ervaring dus ik kon mijn hond met een gerust hart achterlaten bij hem.",
            'plaatser_id' => 1,
            'ontvanger_id' => 3,
        ]);

        DB::table('comments')->insert([
            'comment' => "Mijn kat kwam verhongerd terug. Ik zou deze oppasser niet vertrouwen",
            'plaatser_id' => 4,
            'ontvanger_id' => 5,
        ]);

        DB::table('comments')->insert([
            'comment' => "Deze oppasser heeft goed zijn werk gedaan en mijn hond was helemaal enthousiast.",
            'plaatser_id' => 1,
            'ontvanger_id' => 5,
        ]);

        DB::table('comments')->insert([
            'comment' => "Prima oppasser voor de prijs.",
            'plaatser_id' => 4,
            'ontvanger_id' => 3,
        ]);
    }
}
