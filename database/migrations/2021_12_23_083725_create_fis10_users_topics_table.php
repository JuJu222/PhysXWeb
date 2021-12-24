<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis10UsersTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis10_users_topics', function (Blueprint $table) {
            $table->id('users_topics_id');
            $table->unsignedBigInteger('uid');
            $table->unsignedBigInteger('topic_id');
            $table->boolean('is_locked');
        });

        Schema::table('fis10_users_topics', function (Blueprint $table) {
            $table->foreign('uid')
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
        Schema::dropIfExists('fis10_users_topics');
    }
}
