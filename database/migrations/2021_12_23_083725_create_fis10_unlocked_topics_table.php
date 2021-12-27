<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis10UnlockedTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis10_unlocked_topics', function (Blueprint $table) {
            $table->id('unlocked_topic_id');
            $table->foreignId('fis10_user_id');
            $table->foreignId('topic_id');
            $table->timestamps();

            $table->foreign('fis10_user_id')
                ->references('fis10_user_id')->on('fis10_users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('fis10_unlocked_topics');
    }
}
