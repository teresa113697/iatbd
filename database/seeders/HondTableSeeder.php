<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class HondTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huisdieren')->insert([
            'naam' => "Hond1",
            'soort' => "Hond",
            'oppasdatum' => "2021-7-21",
            'uurtarief' => 5.00,
            'aantal_dagen' => 3,
            'description' => "Er zijn geen speciale zaken om in de gaten te houden",
            'user_id' => 1,
            'image' => "/image/huisdier_hond_hond1.jpg"
            ]);

        DB::table('huisdieren')->insert([
            'naam' => "Hond2",
            'soort' => "Hond",
            'oppasdatum' => "2021-6-2",
            'uurtarief' => 6.50,
            'aantal_dagen' => 1,
            'description' => "Hond2 heeft speciale medicijnen die om de 3 uur gegeven moeten worden",
            'user_id' => 4,
            'image' => "/image/huisdier_hond_hond2.jpg"
            ]);
    }
}
