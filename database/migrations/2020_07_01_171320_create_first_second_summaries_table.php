<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstSecondSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_second_summaries', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('first_summary_id')->unsigned();
            $table->foreign('first_summary_id')->references('id')->on('first_summaries')->onDelete('cascade');

            $table->bigInteger('second_summary_id')->unsigned();
            $table->foreign('second_summary_id')->references('id')->on('second_summaries')->onDelete('cascade');


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
        Schema::dropIfExists('first_second_summaries');
    }
}
