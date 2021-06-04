<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class KonijnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huisdieren')->insert([
            'naam' => "Konijn1",
            'soort' => "Konijn",
            'oppasdatum' => "2021-8-29",
            'uurtarief' => 9.00,
            'aantal_dagen' => 3,
            'description' => "De moeder konijn is zwanger nu en moet apart gehouden worden van de man",
            'user_id' => 1,
            'image' => "/image/huisdier_konijn_konijn1.jpg"
            ]);

        DB::table('huisdieren')->insert([
            'naam' => "Konijn2",
            'soort' => "Konijn",
            'oppasdatum' => "2021-7-5",
            'uurtarief' => 5.00,
            'aantal_dagen' => 4,
            'description' => "Er zijn 4 jonge konijnen",
            'user_id' => 4,
            'image' => "/image/huisdier_konijn_konijn2.jpg"
            ]);
    }
}
