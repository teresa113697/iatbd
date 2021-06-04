<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $huisdieren_afbeeldingen_array = ["huisdier_hond_hond1.jpg", 
        "huisdier_hond_hond2.jpg",
        "huisdier_kat_kat1.jpg",
        "huisdier_kat_kat2.jpg",
        "huisdier_konijn_konijn1.jpg",
        "huisdier_konijn_konijn2.jpg",
        "huisdier_vogel_vogel1.jpg",
        "huisdier_vogel_vogel2.jpg"];

        foreach($huisdieren_afbeeldingen_array as $huisdier_afbeelding) {
        DB::table('image')->insert([
        'image' => "/image/" . $huisdier_afbeelding,
        'soort' => 'huisdier'
        ]);
        }

        $oppas_huis_afbeeldingen_array = ["oppas_huis1.jpg",
                "oppas_huis2.jpg",
                "oppas_huis3.jpg"];

        foreach($oppas_huis_afbeeldingen_array as $oppas_huis_afbeelding) {
        DB::table('image')->insert([
        'image' => "/image/" . $oppas_huis_afbeelding,
        'soort' => 'huis'
        ]);
        }
    }
}
