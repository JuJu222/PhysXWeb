<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis10UsersTopiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis10_users_topiks', function (Blueprint $table) {
            $table->id('id_user_topik');
            $table->unsignedBigInteger('uid');
            $table->unsignedBigInteger('id_topik');
            $table->boolean('is_locked');
        });

        Schema::table('fis10_users_topiks', function (Blueprint $table) {
            $table->foreign('uid')
            ->references('fis10_user_id')->on('fis10_users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_topik')
            ->references('topic_id')->on('topics')
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
        Schema::dropIfExists('fis10_users_topiks');
    }
}
