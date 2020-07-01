<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondSummaryNoWorkHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('second_summary_no_work_hours', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('second_summary_id')->unsigned();
            $table->foreign('second_summary_id')->references('id')->on('second_summaries')->onDelete('cascade');

            $table->bigInteger('not_work_hour_id')->unsigned();
            $table->foreign('not_work_hour_id')->references('id')->on('work_hours')->onDelete('cascade');


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
        Schema::dropIfExists('second_summary_no_work_hours');
    }
}
