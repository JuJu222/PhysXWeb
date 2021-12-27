<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis10OptionTof extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis10_option_tof', function (Blueprint $table) {
            $table->id('option_tof_id');
            $table->boolean('true_or_false');
            $table->foreignId('question_id');
            $table->foreign('question_id')
            ->references('question_id')
            ->on('fis10_questions')
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
        Schema::dropIfExists('fis10_option_tof');
    }
}
