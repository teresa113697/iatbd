<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuisdierenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huisdieren', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('soort');
            $table->date('oppasdatum');
            $table->float('uurtarief', 5, 2);
            $table->integer('aantal_dagen');
            $table->text('description')->nullable();
            $table->foreignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('huisdieren');
    }
}
