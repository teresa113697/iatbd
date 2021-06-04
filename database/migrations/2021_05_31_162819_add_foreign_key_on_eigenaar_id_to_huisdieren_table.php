<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyOnEigenaarIdToHuisdierenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('huisdieren', function (Blueprint $table) {
            $table->foreign("user_id")->references("id")->on("users")->where("role", "=", "Eigenaar");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('huisdieren', function (Blueprint $table) {
            $table->dropForeign("huisdieren_user_id_foreign");
        });
    }
}
