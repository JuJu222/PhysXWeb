<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis10UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis10_users', function (Blueprint $table) {
            $table->id('fis10_user_id');
            $table->foreignId('user_id');
            $table->integer('coins')->default(0);
            $table->foreignId('title')->nullable();
            $table->foreignId('avatar')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('title')
                ->references('shop_item_id')->on('fis10_shop_items')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('avatar')
                ->references('shop_item_id')->on('fis10_shop_items')
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
        Schema::dropIfExists('fis10_users');
    }
}
