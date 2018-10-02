<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_name');
            $table->string('employee_info');
            $table->string('employee_fb_link')->nullable();
            $table->string('employee_twitter_link')->nullable();

            $table->string('employee_google_link')->nullable();

            $table->string('employee_instagram_link')->nullable();
            $table->string('featured_employee_image')->nullable();






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
        Schema::dropIfExists('personals');
    }
}
