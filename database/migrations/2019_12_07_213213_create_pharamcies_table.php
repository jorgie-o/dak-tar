<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharamciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharamcies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('health_center_id')->unsigned()->index();
            $table->bigInteger('patient_id')->unsigned()->index();
            $table->bigInteger('doctor_id')->unsigned()->index();
            $table->string('diagnosis_name');
            $table->string('drug_name');
            $table->text('prescription');
            $table->bigInteger("quantity_out");
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
        Schema::dropIfExists('pharamcies');
    }
}
