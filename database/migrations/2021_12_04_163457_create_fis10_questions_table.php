<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis10QuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis10_questions', function (Blueprint $table) {
            $table->id('question_id');
            $table->string('question_type');
            $table->text('question');
            $table->integer('score')->default(0);
            $table->string('image_path')->nullable();
            $table->foreignId('topic_id');
            $table->timestamps();
            $table->foreign('topic_id')
                ->references('topic_id')->on('fis10_topics')
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
        Schema::dropIfExists('fis10_questions');
    }
}
