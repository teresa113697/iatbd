<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Jeroen Rijsdijk",
            'email' => "rijsdijk.j@hsleiden.nl",
            'password' => bcrypt("testing"),
            'role' => "Eigenaar",
            'leeftijd' => 30,
            'telefoonnummer' => "06 12345678"
            ]);

        DB::table('users')->insert([
            'name' => "Teresa Dinh",
            'email' => "s1120553@student.hsleiden.nl",
            'password' => bcrypt("testing"),
            'role' => "Admin",
            'leeftijd' => 18,
            'telefoonnummer' => "06 18312822"
            ]);

        DB::table('users')->insert([
            'name' => "Kevin van der Hoeven",
            'email' => "hoeven.k@hsleiden.nl",
            'password' => bcrypt("testing"),
            'role' => "Oppas",
            'image' => "/image/oppas_huis1.jpg",
            'leeftijd' => 21,
            'telefoonnummer' => "06 54826597",
            'plaatsnaam' => "Leiden",
            'adres' => "Poepchinees 123",
            ]);

        DB::table('users')->insert([
            'name' => "Jesper Hoogendoorn",
            'email' => "Hoogendoorn.j@hsleiden.nl",
            'password' => bcrypt("testing"),
            'role' => "Eigenaar",
            'leeftijd' => 20,
            'telefoonnummer' => "06 65436894"
            ]);

        DB::table('users')->insert([
            'name' => "Jasper Vonk",
            'email' => "Vonk.j@hsleiden.nl",
            'password' => bcrypt("testing"),
            'role' => "Oppas",
            'image' => "/image/oppas_huis2.jpg",
            'leeftijd' => 20,
            'telefoonnummer' => "06 56487324",
            'plaatsnaam' => "Alphen aan de Rijn",
            'adres' => "Zambiapark 2"
            ]);
    }
}
