<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstSummaryWorkHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_summary_work_hours', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('first_summary_id')->unsigned();
            $table->foreign('first_summary_id')->references('id')->on('first_summaries')->onDelete('cascade');

            $table->bigInteger('work_hour_id')->unsigned();
            $table->foreign('work_hour_id')->references('id')->on('work_hours')->onDelete('cascade');


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
        Schema::dropIfExists('first_summary_work_hours');
    }
}
