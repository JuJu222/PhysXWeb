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
            'topic' => 'Gravitasi',
            'difficulty' => 'easy',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);

        DB::table('topics')->insert([
            'topic_id' => 2,
            'topic' => 'Kecepatan',
            'difficulty' => 'easy',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);

        DB::table('topics')->insert([
            'topic_id' => 3,
            'topic' => 'Lensa',
            'difficulty' => 'easy',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);
    }
}
