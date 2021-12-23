<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            'topic_id' => 1,
            'topic_name' => 'Gravitasi',
            'difficulty' => 'easy',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);

        DB::table('topics')->insert([
            'topic_id' => 2,
            'topic_name' => 'Kecepatan',
            'difficulty' => 'easy',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);

        DB::table('topics')->insert([
            'topic_id' => 3,
            'topic_name' => 'Berat',
            'difficulty' => 'easy',
            'description' => '',
            'topic_image'=> '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()  
        ]);
    }
}
