<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis10OptionFitb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis10_option_fitb', function (Blueprint $table) {
            $table->id('option_fitb_id');
            $table->string('answer');
            $table->foreignId('question_id');
            $table->foreign('question_id')
            ->references('question_id')
            ->on('questions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fis10_option_fitb');
    }
}
