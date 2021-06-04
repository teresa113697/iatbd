<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class AanvragenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aanvragen')->insert([
            'huisdier_eigenaar' => 1,
            'huisdier' => 2,
            'oppas' => 5,
            'status' => "geplaatst",
        ]);

        DB::table('aanvragen')->insert([
            'huisdier_eigenaar' => 4,
            'huisdier' => 4,
            'oppas' => 5,
            'status' => "geaccepteerd",
        ]);

        DB::table('aanvragen')->insert([
            'huisdier_eigenaar' => 1,
            'huisdier' => 1,
            'oppas' => 3,
            'status' => "geplaatst",
        ]);

        DB::table('aanvragen')->insert([
            'huisdier_eigenaar' => 4,
            'huisdier' => 5,
            'oppas' => 3,
            'status' => "geplaatst",
        ]);
    }
}
