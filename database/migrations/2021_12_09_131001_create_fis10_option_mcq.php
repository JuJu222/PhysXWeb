<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis10OptionMcq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis10_option_mcq', function (Blueprint $table) {
            $table->id('option_mcq_id');
            $table->string('option');
            $table->boolean('is_correct');
            $table->foreignId('question_id');
            $table->timestamps();
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
        Schema::dropIfExists('fis10_option_mcq');
    }
}
