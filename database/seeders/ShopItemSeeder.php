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
            'item' => 'Title 1',
            'type' => 'title',
            'price' => '100',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_shop_items')->insert([
            'item' => 'Title 2',
            'type' => 'title',
            'price' => '250',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_shop_items')->insert([
            'item' => 'Title 3',
            'type' => 'title',
            'price' => '500',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_shop_items')->insert([
            'item' => 'Avatar 1',
            'type' => 'avatar',
            'image_path' => '',
            'price' => '100',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_shop_items')->insert([
            'item' => 'Avatar 1',
            'type' => 'avatar',
            'image_path' => '',
            'price' => '250',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_shop_items')->insert([
            'item' => 'Avatar 3',
            'type' => 'avatar',
            'image_path' => '',
            'price' => '500',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
