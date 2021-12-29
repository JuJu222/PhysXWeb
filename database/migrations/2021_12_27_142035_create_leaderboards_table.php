<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaderboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis10_leaderboards', function (Blueprint $table) {
            $table->id('id_leaderboard');
            $table->unsignedBigInteger('uid');
            $table->unsignedBigInteger('id_topic');
            $table->unsignedBigInteger('score');
            $table->timestamps();

            $table->foreign('uid')
            ->references('fis10_user_id')->on('fis10_users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_topic')
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
        Schema::dropIfExists('fis10_leaderboards');
    }
}
