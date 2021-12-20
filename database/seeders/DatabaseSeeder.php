<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeders::class);
        $this->call(TopicSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(OptionSeeder::class);
        $this->call(ShopItemSeeder::class);
    }
}
