<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo');
            $table->string('title_bn');
            $table->string('title_en');
            $table->string('email');
            $table->string('mobile');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('linkedin');
            $table->string('office');
            $table->string('factory');
            $table->string('time_s');
            $table->string('time_e');
            $table->string('day_s');
            $table->string('day_e');
            $table->string('header_image');
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
