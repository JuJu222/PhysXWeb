<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fis10_shop_items')->insert([
            'item' => 'Graduate',
            'type' => 'title',
            'price' => '100',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_shop_items')->insert([
            'item' => 'Master',
            'type' => 'title',
            'price' => '250',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_shop_items')->insert([
            'item' => 'Legend',
            'type' => 'title',
            'price' => '500',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_shop_items')->insert([
            'item' => 'Delta',
            'type' => 'avatar',
            'image_path' => 'https://drive.google.com/uc?export=view&id=1g8-47XhGQfV1WRROUJwr5mPq-0xUBDjc',
            'price' => '100',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_shop_items')->insert([
            'item' => 'Atlas',
            'type' => 'avatar',
            'image_path' => 'https://drive.google.com/uc?export=view&id=1DKaOHMqWk8kMRzW7DLkXtALlfgwV996_',
            'price' => '250',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_shop_items')->insert([
            'item' => 'Titan',
            'type' => 'avatar',
            'image_path' => 'https://drive.google.com/uc?export=view&id=1r3UVa3nZGyeJexq5CLYUgEf-7AnUcSlb',
            'price' => '500',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
