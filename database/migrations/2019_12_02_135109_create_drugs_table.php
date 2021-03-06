<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('health_center_id')->unsigned()->index();
            $table->string('name');
            $table->bigInteger('quantity');
            $table->string('unit_of_measurement');
            $table->bigInteger('price');
            $table->date('expiry_date');
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
        Schema::dropIfExists('drugs');
    }
}
