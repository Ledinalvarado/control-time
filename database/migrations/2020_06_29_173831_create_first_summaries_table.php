<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_summaries', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('formato_id')->unsigned();
            $table->foreign('formato_id')->references('id')->on('first_format_summaries')->onDelete('cascade');

            $table->bigInteger('semana_id')->unsigned();
            $table->foreign('semana_id')->references('id')->on('week_reports')->onDelete('cascade');

            $table->bigInteger('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('companies')->onDelete('cascade');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('observacion');
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
        Schema::dropIfExists('first_summaries');
    }
}
