<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFis10OwnedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fis10_owned_items', function (Blueprint $table) {
            $table->id('owned_item_id');
            $table->foreignId('fis10_user_id');
            $table->foreignId('shop_item_id');
            $table->boolean('is_equipped');
            $table->timestamps();

            $table->foreign('fis10_user_id')
                ->references('fis10_user_id')->on('fis10_users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('shop_item_id')
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
        Schema::dropIfExists('fis10_owned_items');
    }
}
