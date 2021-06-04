<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class KatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huisdieren')->insert([
            'naam' => "Kat1",
            'soort' => "Kat",
            'oppasdatum' => "2021-6-14",
            'uurtarief' => 4.00,
            'aantal_dagen' => 5,
            'description' => "Er zijn geen speciale zaken om in de gaten te houden",
            'user_id' => 1,
            'image' => "/image/huisdier_kat_kat1.jpg"
            ]);

        DB::table('huisdieren')->insert([
            'naam' => "Kat2",
            'soort' => "Kat",
            'oppasdatum' => "2021-5-7",
            'uurtarief' => 8.00,
            'aantal_dagen' => 2,
            'description' => "Het is nog maar een kitten en moet handmatig gevoed worden",
            'user_id' => 4,
            'image' => "/image/huisdier_kat_kat2.jpg"
            ]);
    }
}
