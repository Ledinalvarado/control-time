<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstFormatSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_format_summaries', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('department_formats')->onDelete('cascade');
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
        Schema::dropIfExists('first_format_summaries');
    }
}
