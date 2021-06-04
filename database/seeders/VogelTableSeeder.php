<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class VogelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huisdieren')->insert([
            'naam' => "Vogel1",
            'soort' => "Vogel",
            'oppasdatum' => "2021-6-25",
            'uurtarief' => 4.00,
            'aantal_dagen' => 7,
            'description' => "De vogel mag niet uit zijn kooi gelaten worden",
            'user_id' => 1,
            'image' => "/image/huisdier_vogel_vogel1.jpg"
            ]);

        DB::table('huisdieren')->insert([
            'naam' => "Vogel2",
            'soort' => "Vogel",
            'oppasdatum' => "2021-6-30",
            'uurtarief' => 12.00,
            'aantal_dagen' => 1,
            'description' => "De vogel moet minimaal 1 uur buiten zijn kooi geweest zijn per dag",
            'user_id' => 4,
            'image' => "/image/huisdier_vogel_vogel2.jpg"
            ]);
    }
}
