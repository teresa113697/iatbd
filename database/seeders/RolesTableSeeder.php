<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => "Admin",
            ]);

        DB::table('roles')->insert([
            'role' => "Oppas",
            ]);

        DB::table('roles')->insert([
            'role' => "Eigenaar",
            ]);

        DB::table('roles')->insert([
            'role' => "Blocked",
            ]);

    }
}
