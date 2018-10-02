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
            $table->string('site_name')->nullable();
            $table->string('ceo_name')->nullable();

            $table->string('contact_email')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable();
            $table->string('about_us_big')->nullable();

            $table->string('about_us_small')->nullable();
            $table->string('about_us_nutshell1')->nullable();
            $table->string('about_us_nutshell2')->nullable();
            $table->string('about_us_nutshell3')->nullable();
            $table->string('about_us_nutshell4')->nullable();






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
