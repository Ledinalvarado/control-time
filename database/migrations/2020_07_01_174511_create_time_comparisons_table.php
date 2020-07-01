<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeComparisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_comparisons', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('second_summary_id')->unsigned();
            $table->foreign('second_summary_id')->references('id')->on('second_summaries')->onDelete('cascade');

            $table->bigInteger('time_comparison_id')->unsigned();
            $table->foreign('time_comparison_id')->references('id')->on('time_comparisons')->onDelete('cascade');

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
        Schema::dropIfExists('time_comparisons');
    }
}
