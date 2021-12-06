<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFis10Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_fis10_users', function (Blueprint $table) {
            $table->id('fis10_user_id');
            $table->foreignId('user_id');
            $table->integer('coins');
            $table->foreignId('title');
            $table->foreignId('avater');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_fis10_users');
    }
}
