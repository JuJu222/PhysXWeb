<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersquestions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('fis10_user_id');
            $table->string('answersoal')->nullable();
            $table->bigInteger('question_score')->nullable();
            $table->dateTime('time_start');
            $table->dateTime('time_end')->nullable();
        });

        Schema::table('usersquestions',function(Blueprint $table){
            $table->foreign('question_id')
            ->references('question_id')->on('questions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('fis10_user_id')
            ->references('fis10_user_id')->on('fis10_users')
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
        Schema::dropIfExists('usersquestions');
    }
}
