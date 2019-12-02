<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('health_center_id')->unsigned()->index();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('contact');
            $table->string('address');
            $table->timestamps();

            // $table->foreign('health_center_id')->references('id')->on('health_centers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
