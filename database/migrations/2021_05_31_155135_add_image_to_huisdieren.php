<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToHuisdieren extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('huisdieren', function (Blueprint $table) {
            $table->string('image')->default("/image/huisdier_hond_hond1.jpg");
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
            $table->dropColumn('image');
        });
    }
}
